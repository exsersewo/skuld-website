<?php
    include 'tools.php';

    function getGlobalMoneyLB()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.skuldbot.uk/money/');
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $q = "";

        $q = curl_exec($ch);

        curl_close($ch);

        return json_decode($q);
    }

    function getGuildMoneyLB($guildID)
    {
        throw new Exception("Not Implemented");
        return;

        $g = filter_input ( INPUT_GET, 'g', FILTER_VALIDATE_INT, array('options'=>array('min_range' => 1)));

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.skuldbot.uk/money/'.$g);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $q = "";

        $q = curl_exec($ch);

        curl_close($ch);

        return json_decode($q);
    }

    function getGuildExperienceLB($guildID)
    {
        $g = filter_input ( INPUT_GET, 'g', FILTER_VALIDATE_INT, array('options'=>array('min_range' => 1)));

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.skuldbot.uk/experience/'.$g);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $q = "";

        $q = curl_exec($ch);

        curl_close($ch);

        return json_decode($q);
    }

    function getGlobalExperienceLB()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.skuldbot.uk/experience/');
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $q = "";

        $q = curl_exec($ch);

        curl_close($ch);

        return json_decode($q);
    }
?>