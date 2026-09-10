<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {

    public function get_all_users() {
        try {
            return $this->db->table('users')->get_all();
        } catch (Exception $e) {
            $message = $e->getMessage();

            if (strpos($message, 'Base table or view not found') !== false
                || strpos($message, 'doesn\'t exist') !== false
                || strpos($message, 'No such table') !== false) {
                return [];
            }

            throw $e;
        }
    }
}