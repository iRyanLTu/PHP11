<?php
class eurolyga
{
    private $cnn = false;
    public $message = '';

    function __construct($srv, $sch, $usr, $psv = null)
    {
        try {
            $this->cnn = new PDO('mysql:host=' . $srv . ';dbname=' . $sch, $usr, $psv);
            $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->message = $e->getMessage();
            $this->cnn = false;
        }
    }

    public function getTeams()
    {
        $items = [];
        $i = 0;
        $this->message = '';
        try {
            $res = $this->cnn->query("select * from eurolyga order by team_name");
            while ($row = $res->fetch()) {
                $items[] = [
                    'team_id' => $row['team_id'],
                    'team_logo' => $row['team_logo'],
                    'team_url' => $row['team_url'],
                    'team_name' => $row['team_name'],
                    'team_country' => $row['team_country'],
                    'team_coach' => $row['team_coach']
                ];
            }
            $res->closeCursor();
            return $items;
        } catch (PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }
}