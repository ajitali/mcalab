dictionary = {3: "aji", 2: "nihl", 6: "thojo", 1: "bayeku", 7: "tyso"}

l1=list(dictionary.items())
l1.sort()
dict1=dict(l1)
print("asc order:",dict1)
l2=list(dictionary.items())
l2.sort(reverse=True)
dict2=dict(l2)
print("desc order:",dict2)
