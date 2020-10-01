#Variable input example to API code
'''
Address1 = "4800 Calhoun Rd"
Address2 = ""
City = "Houston"
State = "TX"
ZipFive = "77004"
print(validate(Address1, Address2, City, State, ZipFive)) # Should return True
City = "Dallas"
print(validate(Address1, Address2, City, State, ZipFive)) # Should return False, city is wrong