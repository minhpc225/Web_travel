<?php

class Database
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "webtravel";

    private $conn = null;
    private $result = null;

    public function connect()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            echo "Connect failed";
            exit();
        } else {
            mysqli_set_charset($this->conn, 'utf8');
        }
        return $this->conn;
    }

    public function excute($query)
    {
        $this->result = $this->conn->query($query);
        return $this->result;
    }

    public function getData()
    {
        if ($this->result) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    public function getAllData($table)
    {
        $query = "SELECT * FROM $table";
        $this->excute($query);
        if ($this->numRows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    public function getPrimaryKey($table)
    {
        $sql = "SELECT COLUMN_NAME 
FROM information_schema.KEY_COLUMN_USAGE 
WHERE TABLE_NAME = '$table'
AND CONSTRAINT_NAME = 'PRIMARY'";
        $result = mysqli_query($this->connect(), $sql);
        while ($res = mysqli_fetch_assoc($result)) {
            $column = implode("", $res);
        }
        return $column;
    }

    public function getDataUpdate($table, $id)
    {
        /*
        $sql = "SELECT COLUMN_NAME 
FROM information_schema.KEY_COLUMN_USAGE 
WHERE TABLE_NAME = '$table'
AND CONSTRAINT_NAME = 'PRIMARY'";
        $result = mysqli_query($this->connect(), $sql);
        while ($res = mysqli_fetch_assoc($result)) {
            $column = implode("", $res);
        }
        */
        $column = $this->getPrimaryKey($table);
        $query = "SELECT * FROM $table WHERE $column='$id'";
        $res_1 = $this->excute($query);
        while ($res_2 = mysqli_fetch_array($res_1)) {
            $datas2 = $res_2;
        }
        echo var_dump($query);
        return $datas2;
    }

    public function numRows()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }

    public function getKeySearch($table)
    {
        $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$table' AND COLUMN_NAME LIKE '%_name%'";
        $query = mysqli_query($this->connect(), $sql);
        while ($row = mysqli_fetch_assoc($query)) {
            $res = implode("", $row);
        }
        return $res;
    }

    public function insertData($table, $data)
    {
        $sql = "SELECT * FROM $table";
        $db = new Database();
        $sql = mysqli_query($db->connect(), $sql);
        while ($result = mysqli_fetch_field($sql)) {
            $columns = $result->name;
            $datas[] = $columns;
        }
        $key = implode(", ", $datas);
        $values = array_values($data);
        $val = "'" . implode("', '", $values) . "'";
        $query = "INSERT INTO $table($key) VALUES($val)";
        return $this->excute($query);

    }

    /*
    public function insertData($city_id, $hotel_name, $owner, $description, $images, $starnum, $address)
    {
        $sql = "INSERT INTO hotel(hotel_id, city_id,hotel_name,owner,description,images,starnum,address) VALUES(NULL, $city_id, $hotel_name, $owner, $description, $images, $starnum, $address)";
        return $this->excute($sql);
    }
*/
    public
    function updateData($table, $id, $data)
    {
        /*
        $sql = "SELECT COLUMN_NAME 
FROM information_schema.KEY_COLUMN_USAGE 
WHERE TABLE_NAME = '$table'
AND CONSTRAINT_NAME = 'PRIMARY'";
        $result = mysqli_query($this->connect(), $sql);
        while ($res = mysqli_fetch_assoc($result)) {
            $column = implode("", $res);
        }
        */
        $column = $this->getPrimaryKey($table);
        $sql_1 = "SELECT * FROM $table";
        $db = new Database();
        $sql_1 = mysqli_query($db->connect(), $sql_1);
        while ($result = mysqli_fetch_field($sql_1)) {
            $columns = $result->name;
            $datas_key[] = $columns;

        }
        $values = array_values($data);
        /*
        $combine = array_combine($$d)
        foreach ($datas1 as $i => $key) {
            $query[] = "UPDATE $table SET $key='$values[$i]' WHERE $column='$id'";
        }
        $query_final = implode("; ", $query);
        echo var_dump($query_final);
        return $this->excute($query_final);
        */
        $combine = array_combine($datas_key, $values);
        foreach ($combine as $key => $value) {
            $str[] = $key . "='" . $value . "'";
        }
        $sql = implode(",", $str);
        $query = "UPDATE $table SET $sql WHERE $column='$id'";
        return $this->excute($query);
    }

    public function checkDuplicate($table, $value)
    {
        $key = $this->getPrimaryKey($table);
        $sql = "SELECT * FROM $table WHERE $key='$value'";
        $res = $this->excute($sql);
        $count = mysqli_num_rows($res);
        return $count;
    }

    public
    function deleteData($table, $id)
    {
        $column = $this->getPrimaryKey($table);
        $sql = "DELETE FROM $table WHERE $column='$id'";
        return $this->excute($sql);
    }

    public function searchData($table, $key)
    {
        $primary = $this->getPrimaryKey($table);
        $column = $this->getKeySearch($table);
        $sql = "SELECT * FROM $table WHERE $column LIKE '%$key%' ORDER BY $primary ";
        $this->excute($sql);
        if ($this->numRows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

}
