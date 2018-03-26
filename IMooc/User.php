<?php

namespace IMooc;

use IMooc\Database\MySQLi;

class User
{
    public $id;
    public $name;
    public $mobile;
    public $regtime;

    protected $db;
    function __construct($id)
    {
        $this->db = new MySQLi();
        $this->db->connect('127.0.0.1', 'root', '123456', 'test');
        $response = $this->db->query("SELECT * FROM USER WHERE id = $id LIMIT 1");
        $data = $response->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->db->query("UPDATE USER SET name='{$this->name}', mobile='{$this->mobile}', regtime ='{$this->regtime}' WHERE id = {$this->id}");
    }
}