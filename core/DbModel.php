<?php


namespace core;

abstract class DbModel extends Model
{
    abstract public function tableName(): string;

    abstract public function attributes(): array;

    public function save()
    {
        $tableName = $this->tableName();
        $attr = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attr);
        $state = self::prepare("INSERT INTO $tableName (".implode(', ', $attr).") 
                VALUES (".implode(', ', $params).") ");
        foreach ($attr as $item) {
            $state->bindValue(":$item", $this->{$item});
        }
        $state->execute();
    }

    public static function prepare($sql)
    {
        return Application::$app->db->connect->prepare($sql);
    }
}
