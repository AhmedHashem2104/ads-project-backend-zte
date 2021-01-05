<?php

class DB extends Database
{
  private static $instance = array('sql' => array(), 'counter' => 0, 'table' => '', 'value' => '', 'id' => '');
  // Select One Row.
  public static function rawOneQuery($sql)
  {
    $query = Database::connect()->query($sql);
    if ($query) {
      if ($query->rowCount() == 1) {
        $row = $query->fetch(PDO::FETCH_ASSOC);
        return $row;
      }
      return false;
    } else {
      return false;
    }
  }
  // Select One Or More Than One Row.
  public static function rawQuery($sql)
  {
    $query = Database::connect()->query($sql);
    if ($query) {
      if ($query->rowCount() > 0) {
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
          $data[] = $row;
        }
        return $data;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
  // Update Onr Or More Than One Row.
  public static function updateQuery($sql)
  {
    $query = Database::connect()->query($sql);
    if ($query) {
      return true;
    } else {
      return false;
    }
  }
  // Delete Onr Or More Than One Row.
  public static function deleteQuery($sql)
  {
    $query = Database::connect()->query($sql);
    if ($query) {
      return true;
    } else {
      return false;
    }
  }
  // Query Builder.
  public static function query()
  {
    self::$instance['sql'] = array();
    self::$instance['model'] = get_called_class();
    self::$instance['table'] = get_called_class()::table();
    self::$instance['sql'][] = "SELECT * FROM " . self::$instance['table'];
    $self = new self;
    return $self;
  }
  // Select All Data From Table.
  public static function select($table)
  {
    self::$instance['table'] = $table;
    self::$instance['sql'][] = "SELECT * FROM " . self::$instance['table'];
    $self = new self;
    return $self;
  }
  // Where Conditions in SQL.
  public static function where($parameter, $value)
  {
    // self::$instance['id'] = $value;
    if (self::$instance['counter'] == 0) {
      self::$instance['sql'][] = " WHERE " . $parameter . " = " . $value;
      self::$instance['counter']++;
    } else {
      self::$instance['sql'][] = " AND " . $parameter . " = " . $value;
    }

    $self = new self;
    return $self;
  }
  // orWhere Conditions in SQL.
  public static function orWhere($parameter, $value)
  {
    self::$instance['sql'][] = " OR " . $parameter . $parameter . " = " . $value;
    $self = new self;
    return $self;
  }
  // whereNot Conditions in SQL.
  public static function whereNot($parameter, $value)
  {
    if (self::$instance['counter'] == 0) {
      self::$instance['sql'][] = " WHERE NOT " . $parameter . " = " . $value;
      self::$instance['counter']++;
    } else {
      self::$instance['sql'][] = " AND NOT " . $parameter . " = " . $value;
    }
    $self = new self;
    return $self;
  }
  // orWhereNot Conditions in SQL.
  public static function orWhereNot($parameter, $value)
  {
    self::$instance['sql'][] = " OR NOT " . $parameter . $parameter . " = " . $value;
    $self = new self;
    return $self;
  }
  // whereNull Conditions in SQL.
  public static function whereNull($parameter)
  {
    if (self::$instance['counter'] == 0) {
      self::$instance['sql'][] = " WHERE " . $parameter . " IS NULL ";
      self::$instance['counter']++;
    } else {
      self::$instance['sql'][] = " AND " . $parameter . " IS NULL ";
    }
    $self = new self;
    return $self;
  }
  // whereNotNull Conditions in SQL.
  public static function whereNotNull($parameter)
  {
    if (self::$instance['counter'] == 0) {
      self::$instance['sql'][] = " WHERE " . $parameter . " IS NOT NULL ";
      self::$instance['counter']++;
    } else {
      self::$instance['sql'][] = " AND " . $parameter . " IS NOT NULL ";
    }
    $self = new self;
    return $self;
  }
  // orWhereNull Conditions in SQL.
  public static function orWhereNull($parameter)
  {
    self::$instance['sql'][] = " OR " . $parameter . " IS NULL";
    $self = new self;
    return $self;
  }
  // orWhereNotNull Condtions in SQL.
  public static function orWhereNotNull($parameter)
  {
    self::$instance['sql'][] = " OR " . $parameter . " IS NOT NULL";
    $self = new self;
    return $self;
  }
  // whereLike Conditions in SQL.
  public static function whereLike($operator1, $operator2)
  {
    if (self::$instance['counter'] == 0) {
      self::$instance['sql'][] = " WHERE " . $operator1 . " LIKE '" . $operator2 . "'";
      self::$instance['counter']++;
    } else {
      self::$instance['sql'][] = " AND " . $operator1 . " LIKE '" . $operator2 . "'";
    }
    $self = new self;
    return $self;
  }
  // orWhereLike Conditions in SQL.
  public static function orWhereLike($operator1, $operator2)
  {
    self::$instance['sql'][] = " OR " . $operator1 . " LIKE '" . $operator2 . "'";
    $self = new self;
    return $self;
  }
  // whereNotLike Conditions in SQL.
  public static function whereNotLike($operator1, $operator2)
  {
    if (self::$instance['counter'] == 0) {
      self::$instance['sql'][] = " WHERE " . $operator1 . " NOT LIKE '" . $operator2 . "'";
      self::$instance['counter']++;
    } else {
      self::$instance['sql'][] = " AND " . $operator1 . " NOT LIKE '" . $operator2 . "'";
    }
    $self = new self;
    return $self;
  }
  // orWhereNotLike Conditions in SQL.
  public static function orWhereNotLike($operator1, $operator2)
  {
    self::$instance['sql'][] = " OR " . $operator1 . " NOT LIKE '" . $operator2 . "'";
    $self = new self;
    return $self;
  }
  // whereBetween Conditions in SQL.
  public static function whereBetween($parameter, $operator1, $operator2)
  {
    if (self::$instance['counter'] == 0) {
      self::$instance['sql'][] = " WHERE " . $parameter . " BETWEEN '" . $operator1 . "' AND '" . $operator2 . "'";
      self::$instance['counter']++;
    } else {
      self::$instance['sql'][] = " AND " . $parameter . " BETWEEN '" . $operator1 . "' AND '" . $operator2 . "'";
    }
    $self = new self;
    return $self;
  }
  // orWhere Between Conditions in SQL.
  public static function orWhereBetween($parameter, $operator1, $operator2)
  {
    self::$instance['sql'][] = " OR " . $parameter . " BETWEEN '" . $operator1 . "' AND '" . $operator2 . "'";
    $self = new self;
    return $self;
  }
  // whereIn Conditions in SQL.
  public static function whereIn($parameter, $operators)
  {
    if (self::$instance['counter'] == 0) {
      self::$instance['sql'][] = " WHERE " . $parameter . " IN (";
      foreach ($operators as $operator) {
        if (!next($operators)) {
          self::$instance['sql'][] = "'" . $operator . "'";
        } else {
          self::$instance['sql'][] = "'" . $operator . "' ,";
        }
      }
      self::$instance['sql'][] = ")";
      self::$instance['counter']++;
    } else {
      self::$instance['sql'][] = " AND " . $parameter . " IN (";
      foreach ($operators as $operator) {
        if (!next($operators)) {
          self::$instance['sql'][] = "'" . $operator . "'";
        } else {
          self::$instance['sql'][] = "'" . $operator . "' ,";
        }
      }
      self::$instance['sql'][] = ")";
    }
    $self = new self;
    return $self;
  }
  // orWhereIn Conditions in SQL.
  public static function orWhereIn($parameter, $operators)
  {
    self::$instance['sql'][] = " OR " . $parameter . " IN (";
    foreach ($operators as $operator) {
      if (!next($operators)) {
        self::$instance['sql'][] = "'" . $operator . "'";
      } else {
        self::$instance['sql'][] = "'" . $operator . "' ,";
      }
    }
    self::$instance['sql'][] = ")";
    $self = new self;
    return $self;
  }
  // whereNotIn Conditions in SQL.
  public static function whereNotIn($parameter, $operators)
  {
    if (self::$instance['counter'] == 0) {
      self::$instance['sql'][] = " WHERE " . $parameter . " NOT IN (";
      foreach ($operators as $operator) {
        if (!next($operators)) {
          self::$instance['sql'][] = "'" . $operator . "'";
        } else {
          self::$instance['sql'][] = "'" . $operator . "' ,";
        }
      }
      self::$instance['sql'][] = ")";
      self::$instance['counter']++;
    } else {
      self::$instance['sql'] = " AND " . $parameter . " NOT IN (";
      foreach ($operators as $operator) {
        if (!next($operators)) {
          self::$instance['sql'][] = "'" . $operator . "'";
        } else {
          self::$instance['sql'][] = "'" . $operator . "' ,";
        }
      }
      self::$instance['sql'][] = ")";
    }
    $self = new self;
    return $self;
  }
  // orWhereNotIn Conditions in SQL.
  public static function orWhereNotIn($parameter, $operators)
  {
    self::$instance['sql'][] = " OR " . $parameter . " NOT IN (";
    foreach ($operators as $operator) {
      if (!next($operators)) {
        self::$instance['sql'][] = "'" . $operator . "'";
      } else {
        self::$instance['sql'][] = "'" . $operator . "' ,";
      }
    }
    self::$instance['sql'][] = ")";
    $self = new self;
    return $self;
  }
  // Ordering in SQL.
  public static function orderBy($parameter, $type = false)
  {
    if ($type) {
      self::$instance['sql'][] = " ORDER BY " . $parameter . " " . $type;
    } else {
      self::$instance['sql'][] = " ORDER BY " . $parameter;
    }
    $self = new self;
    return $self;
  }
  // Get All Data From Database.
  public static function get()
  {
    $sql = "";
    foreach (self::$instance['sql'] as $value)
      $sql .= $value;
    $query = DB::connect()->query($sql);
    if (!$query) {
      return false;
    }
    if ($query->rowCount() > 0) {
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
      }
      return $data;
    } else {
      return array();
    }
  }
  // Fetch All Data From Database.
  public static function fetch()
  {
    $sql = "";
    foreach (self::$instance['sql'] as $value)
      $sql .= $value;
    $query = DB::connect()->query($sql);
    if (!$query) {
      return false;
    }
    if ($query->rowCount() > 0) {
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
      }
      return $data;
    } else {
      return array();
    }
  }
  // Fetch All Data From Database.
  public static function fetchAll()
  {
    $sql = "";
    foreach (self::$instance['sql'] as  $value)
      $sql .= $value;
    $query = DB::connect()->query($sql);
    if (!$query) {
      return false;
    }
    if ($query->rowCount() > 0) {
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
      }
      return $data;
    } else {
      return array();
    }
  }
  // Fetch One Row From Database.
  public static function fetchOne()
  {
    $sql = "";
    foreach (self::$instance['sql'] as $value)
      $sql .= $value;
    $query = DB::connect()->query($sql . " LIMIT 1");
    if (!$query) {
      return false;
    }
    if ($query->rowCount() == 1) {
      $row = $query->fetch(PDO::FETCH_ASSOC);
      return $row;
    } else {
      return false;
    }
  }
  // Fetch First Row Data From Database.
  public static function first()
  {
    $sql = "";
    foreach (self::$instance['sql'] as $value)
      $sql .= $value;
    $query = DB::connect()->query($sql . " ORDER BY id LIMIT 1");
    if (!$query) {
      return false;
    }
    if ($query->rowCount() == 1) {

      $row = $query->fetch(PDO::FETCH_ASSOC);
      return $row;
    } else {
      return false;
    }
  }
  // Fetch Last Row Data From Database.
  public static function last()
  {
    $sql = "";
    foreach (self::$instance['sql'] as $value)
      $sql .= $value;
    $query = DB::connect()->query($sql . " ORDER BY id DESC LIMIT 1");
    if (!$query) {
      return false;
    }
    if ($query->rowCount() == 1) {
      $row = $query->fetch(PDO::FETCH_ASSOC);
      return $row;
    } else {
      return false;
    }
  }
  //Create New Row In Database.
  public static function creator($table, $fields)
  {
    $implodeFields = implode(',', array_keys($fields));
    $implodePlaceholder = implode(", :", array_keys($fields));
    try {
      $sql = "INSERT INTO " . $table . " (" . $implodeFields . ") VALUES(:" . $implodePlaceholder . ")";
      $stmt = Database::connect()->prepare($sql);
      foreach ($fields as $key => $value) {
        $stmt->bindValue(':' . $key, $value);
      }
      $stmt->execute();
    } catch (PDOException $e) {
      return false;
    }
    return $fields;
  }
  //Delete One Or More Than One Row From Database.
  public static function remove($table, $id = false, $value = false)
  {
    self::$instance['table'] = $table;
    self::$instance['id'] = $id;
    self::$instance['value'] = $value;
    if (self::$instance['id'] and !self::$instance['value']) {
      $sql = "DELETE FROM " . self::$instance['table'] . " WHERE id = " . self::$instance['id'];
    } else if (self::$instance['id'] and self::$instance['value']) {
      $sql = "DELETE FROM " . self::$instance['table'] . " WHERE " . self::$instance['id'] . " = " . self::$instance['value'];
    } else {
      $sql = "DELETE FROM " . self::$instance['table'];
    }
    $stmt = Database::connect()->prepare($sql);
    $stmt->bindValue(":", self::$instance['id']);
    $stmt->execute();
    return $stmt;
  }
  //Update One Or More Than One Row In Database.
  public function update($fields)
  {
    unset($fields->id);
    $st = "";
    $counter = 1;
    $fields = (array)$fields;
    $total_fields = count($fields);
    foreach ($fields as $key => $value) {
      if ($counter === $total_fields) {
        $set = "$key = :" . $key;
        $st = $st . $set;
      } else {
        $set = "$key = :" . $key . ", ";
        $st = $st . $set;
        $counter++;
      }
    }
    self::$instance['sql'][0] = "UPDATE " . self::$instance['table'] . " SET " . $st;
    $sql = "";
    foreach (self::$instance['sql'] as $key => $value)
      $sql .= $value;
    $stmt = Database::connect()->prepare($sql);
    foreach ($fields as $key => $value) {
      $stmt->bindValue(':' . $key, $value);
    }
    $stmt->execute();
    self::$instance['sql'][0] = "SELECT * FROM " . self::$instance['table'];
    $sql = "";
    foreach (self::$instance['sql'] as $value)
      $sql .= $value;
    $query = DB::connect()->query($sql . " LIMIT 1 ");
    if ($query->rowCount() == 1) {
      $row = $query->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    return false;
  }
  //Update One Or More Than One Row In Database.
  public static function modify($table, $fields, $id = false, $value = false)
  {
    self::$instance['table'] = $table;
    self::$instance['id'] = $id;
    self::$instance['value'] = $value;
    $st = "";
    $counter = 1;
    $total_fields = count($fields);
    foreach ($fields as $key => $value) {
      if ($counter === $total_fields) {
        $set = "$key = :" . $key;
        $st = $st . $set;
      } else {
        $set = "$key = :" . $key . ", ";
        $st = $st . $set;
        $counter++;
      }
    }
    $sql = " ";
    $sql .= "UPDATE " . self::$instance['table'] . " SET " . $st;
    if (self::$instance['id'] and !self::$instance['value']) {
      $sql .= " WHERE id = " . self::$instance['id'];
    } else if (self::$instance['id'] and self::$instance['value']) {
      $sql .= " WHERE " . self::$instance['id'] . " = " . self::$instance['value'];
    } else {
      $sql .= " WHERE id = " . self::$instance['id'];
    }
    $stmt = Database::connect()->prepare($sql);
    foreach ($fields as $key => $value) {
      $stmt->bindValue(':' . $key, $value);
    }
    $stmt->execute();
    $string = "SELECT * FROM " . $table;
    if (!self::$instance['value']) {
      $string .= " WHERE id = " . self::$instance['id'];
    } else {
      $string .= " WHERE " . self::$instance['id'] . " = " . self::$instance['value'];
    }
    $query = Database::connect()->query($string . " LIMIT 1 ");
    if ($query->rowCount() > 0) {
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }
  //Update One Or More Than One Row In Database.
  public function delete()
  {
    $sql = "";
    foreach (self::$instance['sql'] as $value)
      $sql .= $value;
    $querySelect = DB::connect()->query($sql . " LIMIT 1 ");

    self::$instance['sql'][0] = "DELETE FROM " . self::$instance['table'];
    $sql = "";
    foreach (self::$instance['sql'] as $value)
      $sql .= $value;
    $stmt = Database::connect()->prepare($sql);
    $stmt->execute();

    if ($querySelect->rowCount() == 1) {
      $row = $querySelect->fetch(PDO::FETCH_ASSOC);
      return $row;
    }
    return false;
  }

  // public static function with($tableName)
  // {
  //   self::$instance['model']::$tableName();
  //   $self = new self;
  //   return $self;
  // }

  // protected static function hasOne($model, $primaryKey_foreignKey = array(false))
  // {
  //   $query = DB::connect()->query("SELECT * FROM posts LEFT JOIN " . $model::table() . " ON posts.id = " . $model::table() . ".post_id");
  //   if ($query->rowCount() > 0) {
  //     while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
  //       $data[] = $row;
  //     }
  //   }
  //   print_r(json_encode($data));
  //   die();
  //   $techs = Tech::query()->fetch();
  // }
}
