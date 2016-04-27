<?php
//2. Сделайте класс Power, который возводит число в нужную степень (не используя стандартную функцию pow).
// Класс должен иметь следующие методы: 2, 3, 4, 5 степени.
interface iPower
{
    public function multiply2($a);

    public function multiply3($a);

    public function multiply4($a);

    public function multiply5($a);
}