<?php
namespace App\Data\Models;

class Tribunal extends BaseModel
{
    /**
     * @var string
     */
    protected $table = 'tribunais';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'abreviacao', 'url_api'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function processos()
    {
        return $this->hasMany(Processo::class);
    }
}
