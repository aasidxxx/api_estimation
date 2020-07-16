 В продолжение к разговору о REST API 
 Реализация в связке Laravel 7.12 + JSON Web Tokens (JWT)
 Валидация данных не делалась. Логика сделана только для демонстрации 
 
 
 registration user api 
 {хост}/api/register?name={значение}&email={значение}&password={значение}
 
 login user api 
 {хост}/api/login?email={значение}&password={значение}
 
 
 delete date - delete
 {хост}/api/order/17?token={token}
 
 all selest - get
 {хост}/api/order?token={token}
 
 id select - get
 {хост}/api/order/20?token={token} 
 
 id select - post
 {хост}/api/order/20?token={token} 
 
 update - put
 {хост}/api/order/{id}?token={token}&num={значение}&description={значение} 
