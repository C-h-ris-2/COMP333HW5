from unit_testing_sample_code import *

#pass 4 parameters
def test_string(qnum,expected,funct):
    output = funct
    if(expected == output):
        print(f"Test {qnum} passed! '{output}' matches '{expected}'.")
    else:
        print(f"Test {qnum} failed. Expected; '{expected}'. Got : '{output}'.")

def test_strlist(qnum,expected,funct):
    print(f"Test {qnum}:")
    output = funct
    for i in range(len(output)):
        if(expected[i] == output[i]):
            print(f"Part {i} passed! '{output[i]}' matches '{expected[i]}'")
        else:
            print(f"Test {i} failed. Expected: '{expected[i]}'. Got : '{output[i]}.'")

def test_int(qnum,expected,funct):
    output = funct
    if(expected == output):
        print(f"Test {qnum} passed! {output} matches {expected}")
    else:
        print(f"Test {qnum} failed. Expected; {expected}. Got : {output}.")

def test_intlist(qnum,expected,funct):
    print(f"Test {qnum}:")
    output = funct
    for i in range(len(output)):
        if(expected[i] == output[i]):
            print(f"Part {i} passed! {output[i]} matches {expected[i]}")
        else:
            print(f"Test {i} failed. Expected: {expected[i]}. Got : {output[i]}.")


print("\nString Capitalizer Tests:")
# test_string is the function for testing the string capitalizer and takes # three arguments: test number (“0”), expected output value (“TwO”), and
# the call to the string_capitalizer function with the argument “two”.
test_string("0", "TwO", string_capitalizer("two"))
test_string("1", "C", string_capitalizer("c"))
test_string("2", "FouR", string_capitalizer(4))
test_string("3", "", string_capitalizer(""))
print("\nList Capitalizer Tests:")
test_strlist("0", ["TwO","C","FouR",""], capitalize_list(["two","c",4,""]))
print("\nInteger Manipulator Tests:") 
test_int("0", 66, integer_manipulator(10))
test_int("1", 2, integer_manipulator(2))
test_int("2", 6, integer_manipulator(3))
test_int("3", 0, integer_manipulator(0))
test_int("4", 1, integer_manipulator("three"))
print("\nManipulate List Tests:")
test_intlist("0", [66,2,6,0,1], manipulate_list([10,2,3,0,"three"]))