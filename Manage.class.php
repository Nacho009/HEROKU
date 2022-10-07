<?php

class Manage
{
    private $db = null;

    public function __construct()
    {
        $this->db = new BBDD();
        $this->httpRequestListener();
    }
    public function otherListeners()
    {
        $this->addVisit($this->makeData());
        $this->renderPage();
    }
    public function httpRequestListener()
    {
        if (isset($_GET["from"])) {
            if ($_GET["from"] == "ajax") {
                $this->addClickProject($_GET);
            } else {
                $this->otherListeners();
            }
        } else {
            $this->otherListeners();
        }
    }
    public function addClickProject($get)
    {
        if (isset($get["project"]) && isset($get["type"])) {
            if ($this->db->addProject($get["project"], $get["type"])) {
                echo json_encode(["type" => "success"]);
            } else {
                echo json_encode(["type" => "error"]);
            }
        }
    }
    public function addVisit($data)
    {
        if ($this->db->existIp($data["ip"])) {
            $this->db->set($data["ip"], $this->time());
        } else {
            $this->db->add($data);
        }
    }
    public function makeData()
    {
        $data = [
            "ip" => $_SERVER["REMOTE_ADDR"],
            "count" => 1,
            "browser" => $_SERVER["HTTP_USER_AGENT"],
            "lastvisit_at" => $this->time(),
            "visist_at" => $this->time(),
        ];
        return $data;
    }
    public function time($type = "")
    {
        date_default_timezone_set("America/Bogota");
        switch ($type) {
            case "date":
                return date("Y-m-d");
                break;
            case "time":
                return date("H:i:s");
                break;
            default;
                return date("Y-m-d H:i:s");
        }
    }
    public function renderPage()
    {
        require_once "./view_html.php";
    }
    public static function start()
    {
        new Manage();
    }
}
