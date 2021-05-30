#For-in
#String
string = "apple"
for value in string:
	print(value)

#List
array1 = [1, 2, 3, 4, 5];
for value in array1:
	print(value)

#Dictionary
names = {'Funda':'Tan', 'Ali':'Veli'}
for name in names:
    print(name)

#Tuple
tuple = ("Apple", "Black", "Blue")
for value in tuple:
  print(value)

#While
#String
i = 0;
while i < 5:
    print(string[i])
    i = i + 1

#List
i = 0;
while i < 5:
    print(array1[i])
    i = i + 1

#The way that next item accessed
#While
#Loop condition is tested before the execution of for loop
i = 0;
while i < 5:
    print(string[i])
    i = 10

#List
i = 0;
while i < 5:
    print(array1[i])
    i = 10
