<?php
if(isset($_GET['birthDate'])) {
    $birthDate = $_GET['birthDate'];

    function dayOfWeek($date) {
        $dayOfWeek = date('N', strtotime($date));
        $daysOfWeek = ["poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota", "niedziela"];
        return $daysOfWeek[$dayOfWeek - 1];
    }

    function age($date) {
        $now = new DateTime();
        $birthday = new DateTime($date);
        $diff = $now -> diff($birthday);
        return $diff -> y;
    }

    function daysUntilBirthday($date) {
        $now = new DateTime();
        $birthday = new DateTime($date);
        $birthday->modify('+' . ((int)$now->format('Y') - (int)$birthday->format('Y')) . ' years');
        if ($now > $birthday) {
            $birthday->modify('+1 year');
        }
        $diff = $now->diff($birthday);
        return $diff->days;
    }

    $dayOfWeek = dayOfWeek($birthDate);
    $age = age($birthDate);
    $daysUntilBirthday = daysUntilBirthday($birthDate);

    echo "Użytkownik urodził się w $dayOfWeek<br>";
    echo "Ma $age lat<br>";
    echo "Pozostało $daysUntilBirthday dni do kolejnych urodzin";
}
?>
