fn main() {
    let mut i = 0;
    let mut array = [0i32; 4];
    array[0] = 1;
    array[1] = 2;
    array[2] = 3;
    array[3] = 4;

    //Loop
    //Array
    loop{
        i = i + 1;
        println!("Result: {}", array[i-1]);
        break
    }

    //Vector
    i = 0;
    let vector = vec!["a", "b", "c"];
    loop {
        i = i + 1;
        println!("Result: {}", vector[i-1]);
        break
    }

    //For-in
    //Array
    for x in 0..array.len() {
        println!("Result: {}", array[x]);
    }

    //Vector
    for value in vector {
        println!("Result: {}", value);
    }

    //While
    //Array
    i = 0;
    while i < 4{
         println!("Result: {}", array[i]);
         i = i + 1;
    }

    //Vector
    i = 0;
    let vector = vec!["a", "b", "c"];
    while i < 3 {
        println!("Result: {}", vector[i]);
        i = i + 1;
    }

    //The way that next item accessed
    //While
    //Loop condition is tested before the execution of for loop
    i = 0;
    while i < 4{
         println!("Result: {}", array[i]);
         println!("Inside while loop");
         i = 10;
    }

    //Vector
    i = 0;
    let vector = vec!["a", "b", "c"];
    while i < 3 {
        println!("Result: {}", vector[i]);
        println!("Inside while loop two");
        i = 10;
    }
}
