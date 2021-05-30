fn main() {
    let mut bool1 = true;
    let mut bool2 = true;
    let bool3 = false;

    println!("Result is: {}", bool1 && bool2);
    println!("Result is: {}", bool1 || bool2);
    println!("Result is: {}", !bool1);

    let mut result = (bool1 || bool2) && bool3;
    println!("Result is: {}", result);

    result = bool1 || (bool2 && bool3);
    println!("Result is: {}", result);

    result = bool1 || bool2 && bool3;
    println!("Result is: {}", result);
    // and has precedence over or

    result = (!bool1) || bool2;
    println!("Result is: {}", result);

    result = !(bool1 || bool2);
    println!("Result is: {}", result);

    result = !bool1 || bool2;
    println!("Result is: {}", result);
    // not has precedence over or

    result = (!bool1) && bool3;
    println!("Result is: {}", result);

    result = !(bool1 && bool3);
    println!("Result is: {}", result);

    result = !bool1 && bool3;
    println!("Result is: {}", result);
    // not has precedence over and

    fn func1() -> bool{
        println!("func1");
        return true;
    }

    fn func2() -> bool{
        println!("func2");
        return true;
    }

    fn func3() -> bool{
        println!("func3");
        return true;
    }

    result = func1() && func2() && func3();
    println!("Result is: {}", result);

    result = func1() || func2() || func3();
    println!("Result is: {}", result);
    /*and, or they are left associative and operand evaluation
      order is from left to right*/

    bool1 = false;
    bool2 = false;
    result = !bool1 && bool2;
    println!("Result is: {}", result);
    result = !(bool1 && bool2);
    println!("Result is: {}", result);
    result = (!bool1) && bool2;
    println!("Result is: {}", result);
    /*result of not bool1 and bool2 is the same as (not bool1) and
      bool2 so not operator is right associative*/

    result = !func1() && func2() && func3();
    println!("Result is: {}", result);
    //Only func1 is evaluated, other ones are not executed because of short-circuit.
    result = func1() || func2() || func3();
    println!("Result is: {}", result);
    //Only func1 is evaluated, other ones are not executed because of short-circuit.
}
