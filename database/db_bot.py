import sqlite3
from faker import Faker
import string
import random

# def generate_random_password(len):
#     characters = list(string.ascii_letters + string.digits + "!@#$%^&*()")
#     length = len
#     random.shuffle(characters)
#     password = []
#     for i in range(length):
#         password.append(random.choice(characters))
#     random.shuffle(password)
#     password = "".join(password)
#     return password


# faker = Faker()

# con = sqlite3.connect('c:/users/nicky/files/projects/chess/database/chess')
# cur = con.cursor() 

# for i in range(5000):
#     password = generate_random_password(10)
#     username = faker.user_name()
#     sql = "INSERT INTO users (username, password) VALUES (" + "'" + username + "', '" + password + "'" + ")";
#     cur.execute(sql)
#     con.commit()

faker = Faker()

con = sqlite3.connect('c:/users/nicky/files/projects/chess/database/chess')
cur = con.cursor() 

# for i in range(5001):
#     sql = "INSERT INTO icon (user_id) VALUES (" + str(i+1) + ")";
#     print(sql)
#     cur.execute(sql)
#     con.commit()

# for i in range(5001):
#     sql = "INSERT INTO active_players (user_id) VALUES (" + str(i+1) + ")";
#     print(sql)
#     cur.execute(sql)
#     con.commit()

for i in range(5001):
    gender = random.randint(1, 3)
    email = faker.email()
    sql = "INSERT INTO user_info (user_id, email, gender_id) VALUES (" + str(i+1) +',' + '"'  + email +'"' + "," + str(gender) + ")"
    print(sql)
    cur.execute(sql)
    con.commit()
