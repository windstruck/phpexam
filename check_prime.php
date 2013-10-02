<?php
/**
 * เอาไว้ตรวจสอบตัวเลขว่าเป็นจำนวนเฉพาะหรือเปล่า
 * 
 */

// definitely not a prime
echo gmp_prob_prime("6") . "\n";

// probably a prime
echo gmp_prob_prime("1111111111111111111") . "\n";

// definitely a prime
echo gmp_prob_prime("11") . "\n";