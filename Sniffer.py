import socket
import datetime
from datetime import datetime
import calendar
import pymysql

# Tomar fecha actual
ahora = datetime.now()
fecha = str(ahora.year), "-", str(ahora.month), "-", str(ahora.day)
fecha = "".join(fecha)  # de tupla a string

# Conf y conexion con base de datos
conexion = pymysql.connect(
    host='m001.civuexhbxgux.us-east-1.rds.amazonaws.com',
    port=3306,
    user='Will',
    password='CB27d277',
    db='M001'
)
cursor = conexion.cursor()

# Configuracion del socket y comunicacion
UDP_IP = "localhost"
UDP_PORT = 50004
sock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
sock.bind((UDP_IP, UDP_PORT))

while True:
    data, addr = sock.recvfrom(1024)
    data = str(data, 'utf-8')
    paquete = data + "," + fecha
    paquete = paquete.split(",")
    print("received message:", paquete)

    insert_row = "INSERT INTO POSDATEP(Latitud, Longitud, Fecha) VALUES (%s, %s, %s)"
    cursor.execute(
        insert_row, (str(paquete[0]), str(paquete[1]), str(paquete[2])))
    conexion.commit()
    cursor.close

# ps -fA | grep python
# #kill index

# packets to test
#-74.85172033309937, 11.017557340610484
#-74.85078155994415, 11.017315125456657
#-74.85013246536253, 11.01716242449635
# -74.8496925830841,11.01705448066627
# -74.84923392534256,11.016907045127056
# -74.84874308109282,11.016785937307453
