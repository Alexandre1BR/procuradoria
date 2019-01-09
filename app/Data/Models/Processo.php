<?php

namespace App\Data\Models;

use App\Data\Presenters\ProcessoPresenter;
use App\Data\Repositories\Users;
use App\Data\Scope\Processo as ProcessoScope;
use App\Events\ProcessoCreated;
use App\Events\ProcessoUpdated;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Spatie\Tags\HasTags;

class Processo extends BaseModel
{
    use HasTags, Notifiable;

    /**
     * @var array
     */
    protected $dates = ['data_distribuicao', 'data_recebimento', 'data_arquivamento'];

    /**
     * @var array
     */
    protected $with = ['acao', 'tribunal', 'procurador', 'assessor', 'estagiario', 'tags'];

    protected $numericColumns = ['numero_judicial'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'data_distribuicao',
        'data_recebimento',
        'numero_judicial',
        'numero_alerj',
        'tribunal_id', //'origem_id',
        'vara', //'origem_complemento',
        'acao_id',
        'relator_id',
        'apensos_obs',
        'juiz_id',
        'autor',
        'reu',
        'objeto',
        'merito',
        'liminar',
        'recurso',
        'procurador_id',
        'estagiario_id',
        'assessor_id',
        'tipo_meio_id',
        'observacao',
        'data_arquivamento',
        'observacao_arquivamento',
        'link',
        'site_alerj_link',
        'tipo_processo_id',
    ];

    /**
     * @var array
     */
    protected $presenters = [
        'data_distribuicao_formatado',
        'data_recebimento_formatado',
        'data_arquivamento_formatado',
    ];

    /**
     * @var array
     */
    protected $dataTypes = [
        'numero_judicial' => 'id',
        'numero_alerj' => 'id',
        'tribunal_id' => 'id',
        'vara' => 'string',
        'data_distribuicao' => 'date',
        'data_recebimento' => 'date',
        'acao_id' => 'id',
        'juiz_id' => 'id',
        'relator_id' => 'id',
        'apensos_obs' => 'string',
        'autor' => 'string',
        'reu' => 'string',
        'objeto' => 'string',
        'merito' => 'string',
        'liminar' => 'string',
        'recurso' => 'string',
        'procurador_id' => 'id',
        'estagiario_id' => 'id',
        'assessor_id' => 'id',
        'tipo_meio_id' => 'id',
        'observacao' => 'string',
        'data_arquivamento' => 'date',
        'observacao_arquivamento' => 'string',
        'tags' => 'tags',
        'link' => 'link',
        'site_alerj_link' => 'link',
        'tipo_processo_id' => 'id',
    ];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => ProcessoCreated::class,
        'updated' => ProcessoUpdated::class,
    ];

    /**
     * @return mixed
     */
    private function getResponsibles()
    {
        $notifiables = collect();

        $this->addNotifiable($notifiables, $this->procurador, 'Responsável (procurador)');

        $this->addNotifiable($notifiables, $this->assessor, 'Responsável (assessor)');

        $this->addNotifiable($notifiables, $this->estagiario, 'Responsável (estagiário)');

        return $notifiables;
    }

    /**
     * @return mixed
     */
    public function getDataSemHoraAttribute()
    {
        return $this->data_distribuicao->format('d/m/Y');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function andamentos()
    {
        return $this->hasMany(Andamento::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tribunal()
    {
        return $this->belongsTo(Tribunal::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function acao()
    {
        return $this->belongsTo(Acao::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function relator()
    {
        return $this->belongsTo(Juiz::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function juiz()
    {
        self::with('juiz');

        return $this->belongsTo(Juiz::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function procurador()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estagiario()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assessor()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoMeio()
    {
        return $this->belongsTo(Meio::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoProcesso()
    {
        return $this->belongsTo(TipoProcesso::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apensos()
    {
        return $this->hasMany(Apenso::class);
    }

    /**
     * @return string
     */
    public function getPresenterClass()
    {
        return ProcessoPresenter::class;
    }

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ProcessoScope());
    }

    /**
     * @param array $options
     *
     * @return bool|void
     */
    public function save(array $options = [])
    {
        Cache::forget('getProcessosData' . $this->id);

        parent::save();
    }

    /**
     * @param $event
     *
     * @return \Illuminate\Support\Collection
     */
    public function getNotifiableUsersFor($event)
    {
        return $this->notifiables;
    }

    /**
     * @param $notifiables
     * @param $notifiable
     */
    public function addNotifiable(&$notifiables, $notifiable, $type = '')
    {
        if (!is_null($notifiable)) {
            $notifiable->type = $type;

            if (!is_null($notifiable) && is_null($notifiables->where('id', $notifiable->id)->first())) {
                $notifiables->push($notifiable);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getNotifiablesAttribute()
    {
        $notifiables = $this->getResponsibles()
            ->reject(function ($responsavel) {
                return $responsavel->no_notifications;
            })
            ->merge(
                app(Users::class)
                    ->notifiables()
                    ->map(function ($user) {
                        $user->type = 'Usuário';

                        return $user;
                    })
            );

        return $notifiables;
    }

    /**
     * @return array
     */
    public function getNumericColumns(): array
    {
        return $this->numericColumns;
    }
}
