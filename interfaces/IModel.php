<?php
namespace onbuy\interfaces;
interface IModel {
    public static function getOne($id);
    public static function getAll();
    public static function getTableName();
}
