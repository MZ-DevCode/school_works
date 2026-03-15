def reverse_recursive(s):
    if len(s) <= 1:
        return s
    return reverse_recursive(s[1:]) + s[0]
    
a = input("Print something: ")

print(reverse_recursive(a))
