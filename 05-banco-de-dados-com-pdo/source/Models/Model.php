<?php
namespace source\Models;
use source\Database\Connect;

abstract class Model
{
    /** @var object|null */
    protected $data;
    /** @var \PDOException|null */
    protected $fail;
    /** @var string|null */
    protected $message;

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value) {
        if(empty($this->data)) {
            $this->data = new \stdClass();
        }
        $this->data->$name = $value;
    }

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)  {
        return isset($this->data->$name);
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name){
        return ($this->data->$name ?? null);
    }

    /**
     * @return string|null
     */
    public function message(): ?string
    {
        return $this->message;
    }

    /**
     * @return \PDOException|null
     */
    public function fail(): ?\PDOException
    {
        return $this->fail;
    }

    /**
     * @return object|null
     */
    public function data(): ?object
    {
        return $this->data;
    }

    protected function create()
    {
    }

    /**
     * @param string $select
     * @param string $params
     * @return \PDOStatement|null
     */
    protected function read(string $select, string $params = null): ?\PDOStatement
    {
        try {
            $stmt = Connect::getInstance()->prepare($select);
            if ($params) {
                parse_str($params, $params);
                var_dump($params);
                foreach ($params as $key => $value) {
                    $type = (is_numeric($value) ? \PDO::PARAM_INT : \PDO::PARAM_STR);
                    $stmt->bindValue(":{$key}", $value, $type);
                }
            }

            $stmt->execute();
            return $stmt;
        } catch (\PDOException $e) {
            $this->fail = $e;
            return null;
        }
    }

    protected function update()
    {
    }

    protected function delete()
    {
    }

    protected function safe(): ?array
    {
    }

    private function filter()
    {
    }
}