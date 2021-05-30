fun main() {
    //Nested subprogram definitions
    fun subprogram(){
        fun subprogramInner(){
            println("In inner subprogram")
        }
        val myString = "In outer subprogram"
        subprogramInner()
        println(myString)
    }
	subprogram()

    //Scope of local variables
    fun subprogram2(){
        val local = 5
        println("Local is $local in subprogram2")
        fun subprogram3(){
            println("Local is $local in subprogram3")
            val local2 = 10
            println("Local2 is $local2 in subprogram3")
    	}
        subprogram3()
    }
    subprogram2()

    //Parameter passing methods
    fun subprogram(a: Int): Int{
        return a * 2
    }
    println(subprogram(5))

    //fun and return keywords, default parameters
    fun subprogram4(string: String = "default argument"): String{
        println(string)
        return string
    }

    subprogram4()
    subprogram4("my argument")

    //infix keyword
    infix fun Int.keywords(myInt: Int){
        println(this * myInt)
    }
    3 keywords 2

    //Closures
    fun subprogram5(){
        val x = 2
        fun a(){
        	println(x)
        }
        a()
    }
    subprogram5()
}
