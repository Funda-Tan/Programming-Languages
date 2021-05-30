bool1 = True
bool2 = True
bool3 = False

print("Result is: ", bool1 and bool2)
print("Result is: ",bool1 or bool2)
print("Result is: ", not bool1)

result = bool1 or bool2 and bool3
print("Result is: ", result)

result = (bool1 or bool2) and bool3
print("Result is: ", result)

result = bool1 or (bool2 and bool3)
print("Result is: ", result)
# and has precedence over or

result = not bool1 or bool2
print("Result is: ", result)

result = (not bool1) or bool2
print("Result is: ", result)

result = not (bool1 or bool2)
print("Result is: ", result)
# not has precedence over or

result = not bool1 and bool3
print("Result is: ", result)

result = (not bool1) and bool3
print("Result is: ", result)

result = not (bool1 and bool3)
print("Result is: ", result)
# not has precedence over and

def func1():
    print("func1");
    return True;

def func2():
    print("func2");
    return True;

def func3():
    print("func3");
    return True;

def funcFalse():
    print("funcFalse");
    return False;

result = func1() and func2() and func3()
print("Result is: ", result)

result = func1() or func2() or func3()
print("Result is: ", result)
# and, or they are left associative and operand evaluation
# order is from left to right

bool1 = False
bool2 = False
result = not bool1 and bool2
print("Result is: ", result)
result = not (bool1 and bool2)
print("Result is: ", result)
result = (not bool1) and bool2
print("Result is: ", result)
# result of not bool1 and bool2 is the same as (not bool1) and bool2 so not operator is right associative

result  = funcFalse() and func1() and func2()
# Only funcFalse is evaluated, other ones are not executed because of short-circuit.
result = func1() or func2() or func3()
# Only func1 is evaluated, other ones are not executed because of short-circuit.
