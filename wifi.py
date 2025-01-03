import subprocess

data = subprocess.check_output(['nmcli', '-t', '-f', 'NAME', 'c', 'show', '--active'])
data = data.decode('utf8').split('\n')

profiles= [profiles.split(":")[1][1:-1]for profiles in data if "All User Profile" in profile]

print("{:20}| {:}\n".format('Wi-fi Names', 'Password'))


for profile in profiles:
  data = subprocess.check_output(['nmcli', '-t', '-f', 'NAME', 'c', 'show', '--active'])
  data = data.decode('utf8').split('\n')
  

  Password = [passw.split(":")[1][1:-1] for passw in data if "Key Content" in passw]

  try:
      print("{:<20}| {:}".format(profile, Password[0]))
  except IndexError:
      print("{:<20}| {:}".format(profile, ""))
