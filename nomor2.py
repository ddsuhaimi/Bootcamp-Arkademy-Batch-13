import re


def is_name_valid(name):
    if re.match(r'[A-Z]{3,}$', name):
        return True
    else:
        return False
def is_age_valid(age):
  age = str(age)
  if re.match(r'[0-9]{2}$', age):
    return True
  else:
    return False

def is_username_valid(username):
  if re.match(r'[a-z]{4}[_|.][0-9]{3}$', username):
    return True
  else:
    return False


print(is_name_valid('TIARA'))  # True
print(is_age_valid(21)) # True
print(is_username_valid('yani_333')) # True
print(is_username_valid('dian.11')) # False
