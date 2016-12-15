<?php
    namespace designer;

    /**
     * Class Single
     * @package designer
     * 设计模式：单例模式
     */
    class Single
    {
        /**
         * @var null
         * 自身实例
         */
        private static $mySelf = null;
    
        /**
         * single constructor.
         * 私有构造函数，不允许直接new
         */
        private function __construct()
        {
        }
    
        /**
         * @return Single|null
         * 获取实例
         */
        public static function getInstance()
        {
            if (! self::$mySelf instanceof self) {
                self::$mySelf = new self();
            }
            return self::$mySelf;
        }
    
        /**
         * @return null
         * 禁止clone
         */
        public function __clone()
        {
            echo "The clone is forbidden...";
        }
    
        /**
         * @param $name
         *
         * @return string
         *
         * 测试函数
         */
        public function test($name)
        {
            return "Hello, " . $name;
        }
    }