finalMap = {}
input_list = [
              {
                "name": "Movies", "info": "category_name",
                "data": [
                  { "name": "Interstellar", "info": "category_data" },
                  { "name": "Dark Knight", "info": "category_data" },
                ]
              },
              {
                "name": "Music", "info": "category_name",
                "data": [
                  { "name": "Adams", "info": "category_data" },
                  { "name": "Nirvana", "info": "category_data" },
                ]
              }
            ]


def transform(input_list):
  A = []
  
  for item in input_list:
    dict_movie = {}
    for key in item:
      if key != 'data':
        dict_movie[key] = item[key]
        A.append(dict_movie)
      else:
        for dict_ in item[key]:
          A.append(dict_)
        
  return [dict(t) for t in {tuple(d.items()) for d in A}]

print(transform(input_list))