<?php

    class Test extends DbHandler {
        
        public function getProjects() {
            
            echo 'test';
            
            $sql = "SELECT * FROM code_projects";
            $stmt = $this->connect()->query($sql);
            
            while($row = $stmt->fetch()) {
                echo $row['title'] . '<br>';
            }
        }
    }
?>
