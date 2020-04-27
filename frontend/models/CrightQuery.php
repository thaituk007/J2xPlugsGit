<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Cright]].
 *
 * @see Cright
 */
class CrightQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cright[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cright|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
