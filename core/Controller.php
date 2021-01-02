<?php

namespace Controller;

use DB\DB;

class Controller extends DB
{
    // ZTE ORM Select All Data From Table.
    public static function all()
    {
        $data = get_called_class()::query()->fetch();
        if (!$data) {
            return array();
        }
        return $data;
    }
    // ZTE ORM Create New Row In Table.
    public static function create($promos)
    {
        $data = json_decode(json_encode($promos), true);
        $data = get_called_class()::creator(get_called_class()::table(), $data);
        if ($data) {
            $data = get_called_class()::query()->last();
            return $data;
        } else {
            return false;
        }
    }
    // ZTE ORM Update One Or More Than One Row in Database.
    public static function updateORM($promos, $id, $value = false)
    {
        $data = json_decode(json_encode($promos), true);
        if (!$value) {
            $data = DB::query()->modify(get_called_class()::table(), $data, 'id', $id);
        } else {
            $data = DB::query()->modify(get_called_class()::table(), $data, $id, $value);
        }
        if ($data) {
            $data = get_called_class()::query()->where('id', '=', $id)->fetch();
            if (!$data) {
                return false;
            }
        } else {
            return false;
        }
        return $data;
    }
    // Create Or Update One Or More Than One Row in Database.
    public function save($id = false)
    {
        $promos = json_encode($this);
        $data = json_decode($promos, true);
        if ($id and !empty($id)) {
            $data = DB::query()->modify(get_called_class()::table(), $data, 'id', $id);
            $data = get_called_class()::query()->where('id', '=', $id)->fetch();
        } else {
            $data = DB::query()->creator(get_called_class()::table(), $data);
        }
        return $data;
    }
    // Select One Row From Database.
    public static function find($id)
    {
        $_REQUEST['table'] = get_called_class()::table();
        $data = get_called_class()::query()->where('id', '=', $id)->first();
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
    // Select Or Return Error.
    public static function findOrFail($id)
    {
        $data = get_called_class()::query()->where('id', '=', $id)->first();
        if ($data) {
            return $data;
        } else {
            return array('status' => 0, 'message' => 'Not Found');
        }
    }
    // Select Using Specific Row Using Any Coloumn.
    public static function findBy($id, $like, $value = false)
    {
        if (!$value) {
            $data = get_called_class()::query()->where($id, '=', $like)->fetchAll();
        } else {
            $data = get_called_class()::query()->where($id, $like, $value)->fetchAll();
        }
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
    // Delete One Row From Database.
    public static function deleteORM($id)
    {
        if (is_array($id)) {
            $data = get_called_class()::query()->where('id', '=', $id[0]['id'])->fetch();
            if (!$data) {
                return false;
            }
            $tmpdata = $data;
            $data = DB::remove(get_called_class()::table(), $id[0]['id']);
        } else {
            $data = get_called_class()::query()->where('id', '=', $id)->fetch();
            if (!$data) {
                return false;
            }
            $tmpdata = $data;
            $data = DB::remove(get_called_class()::table(), $id);
        }
        if (sizeof($tmpdata) == 1)
            return $tmpdata[0];
        else
            return $tmpdata;
    }
}
