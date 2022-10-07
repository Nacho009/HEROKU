<?php
class BBDD
{
    private $path = "./database.json";
    private $data = null;
    public function __construct()
    {
        $this->data = $this->get();
    }
    private function get()
    {
        $result = [];
        try {
            $file = file_get_contents($this->path, "r");
            $result = json_decode($file, true);
        } catch (Exception $e) {
            echo ($e->getMessage());
        }
        return $result;
    }
    public function addProject($name, $type)
    {
        $new_data = $this->data;
        $name_project = str_replace(" ", "-", $name);
        $value = isset($new_data["projects"][$name_project]["clicks"][$type])
            ? intval($new_data["projects"][$name_project]["clicks"][$type])
            : 0;
        if ($value == 0) {
            $new_data["projects"][$name_project]["clicks"][$type] = 1;
        } else {
            $new_data["projects"][$name_project]["clicks"][$type] = $value + 1;
        }
        return $this->save($new_data);
    }

    public function set($ip, $lastvisit)
    {
        $new_data = $this->data;
        if (!isset($new_data["visits"])) {
            return false;
        }
        for ($i = 0; $i < count($new_data["visits"]); $i++) {
            if ($new_data["visits"][$i]["ip"] == $ip) {
                $new_data["visits"][$i]["count"] = intval($new_data["visits"][$i]["count"]) + 1;
                $new_data["visits"][$i]["lastvisit_at"] = $lastvisit;
            }
        }
        return $this->save($new_data);
    }
    public function add($data)
    {
        $new_data = $this->data;
        if (!isset($this->data["visits"])) {
            return false;
        }
        array_push($new_data["visits"], $data);
        return $this->save($new_data);
    }
    private function save($all_db)
    {
        try {
            $file = fopen($this->path, "w");
            fwrite($file, json_encode($all_db));
            fclose($file);
            return true;
        } catch (Exception $e) {
            echo ($e->getMessage());
            return false;
        }
    }
    public function existIp($ip)
    {
        $result = false;
        if (!isset($this->data["visits"])) {
            return $result;
        }
        foreach ($this->data["visits"] as $item) {
            if ($item["ip"] == $ip) {
                $result = true;
                break;
            }
        }
        return $result;
    }
}
