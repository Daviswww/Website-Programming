import random
total = 0
count = 0
go = "Y"
while (go == "Y" or go == "y"):
    tmp =   random.randint(1,12)
    count += 1
    print("=======================================================")
    print("Guesses Choice:")
    print("O-Odd E-Even L-Low M-Medium H-High N-Number")
    print("=======================================================")
    option = input("Enter your choice: ")
    if(option == 'N' or option == 'n'):
        num = eval(input('Enter your number: '))
    risk = eval(input('Point at risk: '))
    print('The winning number is %d.'%(tmp))
    if (option == "O" or option == "o"):
        if(tmp %  2 == 1):
            print('You won %d points.'%(risk * 2))
            total += risk * 2
        else:
            print('You lost %d points.'%(risk))
            total -= risk
    elif (option == "E" or option == "e"):
        if(tmp %  2 == 0):
            print('You won %d points.'%((risk * 2)))
            total += risk * 2
        else:
            print('You lost %d points.'%(risk))
            total -= risk
    elif (option == "L" or option == "l"):
        if(tmp < 6):
            print('You won %d points.'%(risk * 3))
            total += risk * 3
        else:
            print('You lost %d points.'%(risk))
            total -= risk
    elif (option == "M" or option == "m"):
        if(tmp == 6):
            print('You won  %d points.'%(risk * 3))
            total += risk * 3
        else:
            print('You lost %d points.'%(risk))
            total -= risk
    elif (option == "H" or option == "h"):
        if(tmp > 6):
            print('You won  %d points.'%(risk * 3))
            total += risk * 3
        else:
            print('You lost %d points.'%(risk))
            total -= risk
    elif (option == "N" or option == "n"):
        if(tmp == num):
            print('You won  %d points.'%(risk * 12))
            total += risk * 12
        else:
            print('You lost %d points.'%(risk))
            total -= risk
    else:
        print("Try again!")
    go = input("Continue (Y/N)? ")
print("=======================================================")
print('Total number of guesses: ', count)
print('Your current point: ', total)