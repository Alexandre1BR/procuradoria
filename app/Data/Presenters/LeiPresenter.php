<?php
/**
 * Created by PhpStorm.
 * User: afdsilva
 * Date: 19/01/2018
 * Time: 16:28.
 */

namespace App\Data\Presenters;

use McCool\LaravelAutoPresenter\BasePresenter;

class LeiPresenter extends BasePresenter
{
    /**
     * @return null|string
     */
    public function lei_formatada()
    {
        $artigo = $this->wrappedObject->artigo;
        $paragrafo = $this->wrappedObject->paragrafo;
        $inciso = $this->wrappedObject->inciso;
        $alinea = $this->wrappedObject->alinea;
        $item = $this->wrappedObject->item;

        $r = $this->wrappedObject->numero_lei;

        if (!is_null($artigo)) {
            $r .= ', Art. '.$artigo;
            if (!is_null($paragrafo)) {
                $r .= ', Par. '.$paragrafo;
                if (!is_null($inciso)) {
                    $r .= ', Inc. '.$inciso;
                    if (!is_null($alinea)) {
                        $r .= ', Alin. '.$alinea;
                        if (!is_null($item)) {
                            $r .= ', Itm. '.$item;
                        }
                    }
                }
            }
        }

        return !is_null($r) ? $r : null;
    }
}
