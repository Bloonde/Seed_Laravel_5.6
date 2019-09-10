<?php

namespace App\Configurations;

use App\Rules\ValidateTicketProductArray;
use Danvelcab\ProjectGenerator\FrameworkClasses\IFrameworkConfiguration;

class RegisterUserConfigurationImpl implements IFrameworkConfiguration
{

    /**
     *  Debe retornar un string con el nombre de la clase Model del recurso
     */
    public function getModelName(){
        /**
         * return 'Flat';
         */

        return 'App\RegisterUser';
    }

    /**
     * Debe retornar un string con el nombre de la tabla del recurso en la base de datos
     */
    public function getTableName(){
        /**
         * return 'flats';
         */

        return 'register_users';
    }
    /**
     * Debe retornar un string con el nombre de la tabla del recurso en la base de datos pero en singular.
     * Se utiliza para determinar el nombre del atributo de las tablas que contengan una foreign key a la del
     * recurso en cuestión
     */
    public function getSingularTableName(){
        /**
         * return 'flat';
         */
        
        return 'register_user';
    }
    /**
     * Debe retornar un array (clave, valor), en el que la clave sea el atributo a validar y el valor un string
     * o un array de reglas para dicho atributo
     */
    public function getRules(){
        /**
         * return [
         *      'name'  => 'required|string
         *      'email'  => 'required|unique|mail
         * ]
         */

       /* return [
            "accept_terms"		    =>		"required|in_true",
            "accept_privacy"		=>		"required|in:true",
        ];*/
        
        
        return [
            'name'      =>  'required|min:2|max:255',
            'surname'   =>  'required|min:2|max:255',
            'address'   =>  'required|min:2|max:255',
            'city'      =>  'required|min:2|max:255',
            'cp'        =>  'required|min:2|max:5',
            'telephone' =>  'required|min:2|max:20',            
        ];
    }

    /**
     * Debe retornar un array con los atributos que serán guardados automáticamente (tal y como vienen en el service)
     * en las operaciones de creación y de actualización.
     */
    public function getAutoSaveFields(){
        /**
         * return ['name', 'email']
         */

        return [
            'name',
            'surname',
            'address',
            'city',
            'cp',
            'telephone',
            'email',
        ];
    }

    /**
     * Debe retornar un array con los campos que se pueden filtrar en la consulta de listado y de detalles por defecto.
     * Cada elemento del array puede ser o bien un string (indicando el campo), para el cual se utilizará la operación
     * where en el filtro, o bien un array clave valor en el que el valor de la clave 'field' es el nombre del campo,
     * y el valor de la clave 'operation' es la operación a realizar en el filtro. En ocasiones puede ser conveniente añadir
     * delante del atributo el nombre de la tablas (en vez de poner name, poner users.name) para que no haya conflicto con otros
     * atributos de tablas con las que se realice un join
     */
    public function getFilters(){
        /**
         * return ['name', 'filter', ['field' => 'status', 'operation' => 'in']
         */

           return ['name', 'surname', 'city', 'email'];
    }

    /**
     * Debe retornar un array con los campos sobre los que se puede hacer una búsqueda
     */
    public function getSearchFilters(){
        /**
         * return ['offers.name', 'filter']
         */
        return [];
    }

    public function getTransformSearchFilters(){
        /**
         * return ['name', 'filter']
         */
        return [
            'name'
        ];
    }

    public function getTransformOrders(){
        /**
         * return ['name', 'filter']
         */
        return [];
    }

    /**
     * Debe retornar un array con los campos sobre los que podremos realizar ordenación
     */
    public function getOrders(){
        /**
         * return ['id', 'name', 'filter']
         */
        return ['id','name','city','email'];
    }

    /**
     * Debe retornar un array de campos sobre los que se va a hacer la selección en las operaciones de listado
     */
    public function getListSelect(){
        /**
         * return ['users.*']
         */

        return ['register_users.*'];
    }

    /**
     * Debe retornar un array de campos sobre los que se va a hacer la selección en las operaciones de detalles
     */
    public function getDetailsSelect(){
        /**
         * return ['users.*']
         */
        return ['register_users.*'];
    }

    /**
     * Debe retornar un array de campos sobre los que se va a hacer la selección en las operaciones de listado para un selector
     */
    public function getSelectorSelect(){
        /**
         * return ['users.id as id',
         *          'users.name as name']
         */
        return ['register_users.id as id','register_users.name as name','register_users.email as email'];
    }

    /**
     * Debe retornar un array con los appends que se quieran añadir en la consulta de detalles
     * El campo attr determinará el nombre que debe tener la función en el Helper, que hará la consulta que se adjuntará en el atributo
     * con el nombre indicado en la key 'new_col_name'
     */
    public function getDetailsAppends(){
        /**
         * return [
         *      [
         *          'attr' => 'privileges',
         *          'new_col_name' => 'privileges'
         *      ]
         * ]
         */
        return ['register_users.*'];
    }
    /**
     * Debe retornar un array con los appends que se quieran añadir en la consulta de listado
     * El campo attr determinará el nombre que debe tener la función en el Helper, que hará la consulta que se adjuntará en el atributo
     * con el nombre indicado en la key 'new_col_name'
     */
    public function getListAppends(){
        /**
         * return [
         *      [
         *          'attr' => 'privileges',
         *          'new_col_name' => 'privileges'
         *      ]
         * ]
         */
        return [];
    }
}