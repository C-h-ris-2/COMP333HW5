import pytest
from unit_testing_sample_code import *

def test_string():
    assert string_capitalizer("two")=="TwO"
    assert string_capitalizer("c")=="C"
    assert string_capitalizer("4") == "FouR"
    assert string_capitalizer("") == ""

def test_strlist():
    assert capitalize_list(["two","c",4,""]) == ["TwO","C","FouR",""]

def test_int():
    assert integer_manipulator(10) == 66
    assert integer_manipulator(2) == 2
    assert integer_manipulator(3) == 6
    assert integer_manipulator(0) == 0
    assert integer_manipulator("three") == 3

def test_intlist():
    assert manipulate_list([10,2,3,0,"three"]) == [66,2,6,0,1]