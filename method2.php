           <?php

class Employee{

     function greet(){

        return 'Ayubovan';
     }

}

$employee_1 = new Employee;

echo $employee_1->greet();

$class_method = get_class_methods('Employee');

echo '<pre>';
print_r($class_method);
echo '</pre>';

?>
