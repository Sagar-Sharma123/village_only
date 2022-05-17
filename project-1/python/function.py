#1-> wap to define a function tolowercase(s) and convert string into lowercase without using return.
# def tolowercase(s):
#     s2=""
#     for i in s:
#         if i>='A' and i<='Z':
#             s2=s2+chr(ord(i)+32)
#         else:
#             s2=s2+i
#     print("string after converting is: ",s2)
# s=input("enter string ")
# tolowercase(s)

#2-> wap to define a function tolowercase(s) and convert string into lowercase using return.
# def tolowercase(s):
#     s2=""
#     for i in s:
#         if i>='A' and i<='Z':
#             s2=s2+chr(ord(i)+32)
#         else:
#             s2=s2+i
#     return s2
# s=input("enter string ")
# print("string after converting is: ",tolowercase(s))

#3-> wap to define a function touppercase(s) and convert string into uppercase without using return.
# def touppercase(s):
#     s2=""
#     for i in s:
#         if i>='a' and i<='z':
#             s2=s2+chr(ord(i)-32)
#         else:
#             s2=s2+i
#     print("string after converting is:",s2)
# s=input("enter string ")
# touppercase(s)

#4-> wap to define a function touppercase(s) and convert string into uppercase using return.
# def touppercase(s):
#     s2=""
#     for i in s:
#         if i>='a' and i<='z':
#             s2=s2+chr(ord(i)-32)
#         else:
#             s2=s2+i
#     return s2
# s=input("enter string ")
# print("string after converting is: ",touppercase(s))

#5-> wap to define a function prime(n) and find whether a number is prime or not without using return.
# def prime(n):
#     c=0
#     for i in range(1,n+1):
#         if n%i==0:
#             c=c+1
#     if c==2:
#         print("prime")
#     else:
#         print("not")
# n=int(input("enter number"))
# prime(n)

#6-> wap to define a function prime(n) and find whether a number is prime or not using return.
# def prime(n):
#     c=0
#     for i in range(1,n+1):
#         if n%i==0:
#             c=c+1
#     if c==2:
#         return ("prime")
#     else:
#         return ("not")
# n=int(input("enter number"))
# print("number is: ",prime(n))

#7-> def a fun() to enter multiple numbers in a single positional argument.
# def fun(*a):
#     for i in a:
#         print(i)
# fun(1,2,3,4,5,6,7,8,9)

# def fun():
#     n=int(input("enter number"))
#     print(n)
# fun()