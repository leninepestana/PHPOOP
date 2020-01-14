<?php
class ShareModel extends Model {
    public function Index() {
        $this->query('SELECT * FROM shares');
        $rows = $this->resultSet();
        //echo var_dump($rows);
        return $rows;
    }
}
?>