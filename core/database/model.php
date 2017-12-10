<?php
namespace database;
abstract class model
{
    public function save()
    {
        if ($this->id != '') {
            $sql = $this->update();
        } else {
            $sql = $this->insert();
            $INSERT = TRUE;
        }
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute();
    }
    
    public function lastID(){
      $modelName = static::$modelName;
      $tableName = $modelName::getTablename();
      $db = dbConn::getConnection();
      $sql='select MAX(id) from '.$tableName;
      echo $sql;
      $statement = $db->prepare($sql);
      $statement->execute();
      $statement->setFetchMode();
      $recordsSet =  $statement->fetchAll(\PDO::FETCH_ASSOC);
      $record=$recordsSet[0];
      $LastID= $record["MAX(id)"];
      //echo $LastID;
      return $LastID+1;
    }
    private function insert()
    {
        //echo 'in insert';
        $id=$this->lastID();
        $this->id=$id;
        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $array = get_object_vars($this);
        $columnString = array_keys($array);
        $columnString1=implode(',', $columnString);
        $valueString = "'".implode("','", $array)."'";
        $sql = 'INSERT INTO ' . $tableName . ' (' . $columnString1 . ') VALUES (' . $valueString . ')';
        //echo $sql;
        return $sql;
    }
    private function update()
    {
        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $array = get_object_vars($this);
        $comma = " ";
        $sql = 'UPDATE ' . $tableName . ' SET ';
        foreach ($array as $key => $value) {
            if (!empty($value)) {
            echo '<br>';
            echo $value;
                $sql .= $comma . $key . ' = "' . $value . '"';
                $comma = ", ";
            }
        }
        $sql .= ' WHERE id=' . $this->id;
        return $sql;
    }
    public function delete()
    {
        $db = dbConn::getConnection();
        $modelName = static::$modelName;
        $tableName = $modelName::getTablename();
        $sql = 'DELETE FROM ' . $tableName . ' WHERE id=' . $this->id;
        $statement = $db->prepare($sql);
        $statement->execute();
    }
}
?>