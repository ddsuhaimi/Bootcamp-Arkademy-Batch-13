import json


def get_person_dict(name, age, address, hobbies, is_married, list_school, skills, interest_in_coding):
    person_dict = {}
    person_dict['name'] = name
    person_dict['age'] = age
    person_dict['address'] = address
    person_dict['hobbies'] = hobbies
    person_dict['is_married'] = is_married
    person_dict['list_school'] = list_school
    person_dict['skills'] = skills
    person_dict['interest_in_coding'] = interest_in_coding

    return person_dict


name = 'Dedi Suhaimi'
age = 22
address = 'Banda Aceh'
hobbies = ['programming']
is_married = False
list_school = [{'year_in': 2015, 'year_out': 2019, 'major': 'Mathematics'}]
skills = [{'skill_name': 'Web Programming', 'level': 'Intermediate'},
          {'skill_name': 'Python', 'level': 'Intermediate'}]
interest_in_coding = True

person_dict = get_person_dict(name, age, address, hobbies, is_married, list_school, skills, interest_in_coding)

with open('person.json', 'w') as json_file:
    json.dump(person_dict, json_file)