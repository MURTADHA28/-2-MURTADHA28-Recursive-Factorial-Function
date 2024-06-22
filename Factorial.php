function calculateFactorial($number) {
    if ($number < 0) {
        return null;
    }
    if ($number === 0) {
        return 1;
    }
    return $number * calculateFactorial($number - 1);
}
echo calculateFactorial(4); 


        //calculateFactorial(4) evaluates to 24, which is the factorial of 4
