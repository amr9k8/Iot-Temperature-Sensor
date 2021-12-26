# Iot-Temperature-Sensor.<br>
## System Overview
![image](https://user-images.githubusercontent.com/61662153/116804487-6f070900-ab1f-11eb-907a-db7ae0c3520b.png)

## Description :<br>
This project Contain code of  Esp32 Microcontroller  that connect it with  LM35 Temperature Sensor and 
Measure temperature each 1 minute then send reading to Remote Server  using HTTP POST , the backend which handle comming request  is php and database is mysql
Finally A JupyterNotebook get data using Api HTTP GET Request with Api Key and Proccess the data and plot a graph  with matplotlib 

### Main Features :<br>
<br>- Send Data from Sensor to WebApp
<br>- Controll your Sensor [turn on/off]  From Any Where By one button from the website
<br>- Store all reading in database for doing some  analysis or other processing 
<br>- the webapp contain Api that provide all reading records stored in database as json format 
<br>- Analyze data and draw Graph from reading by python <br>
### Technologies Used:  <br>
PHP ,  Mysql , JSON , C/C++ <br>





