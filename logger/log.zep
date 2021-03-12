namespace Logger;

class Log 
{
    private static path = "./";
    private static handlers = [];

    public static function setPath(string path)
    {
        let self::path = path;
    }

    public static function getPath()
    {
        return self::path;
    }

    public static function setHandler(string level, var callback)
    {
        let self::handlers[level] = callback;
    }

    public static function write(string level, string message)
    {
        bool pass = true;
        array handlers = self::handlers;
        if isset handlers[level] {
            var fun = handlers[level];
            let pass = (bool) {fun}(message);
        }
        if pass {
            string path = (string) rtrim(self::path, "/");
            string file = path . "/" . date("Y-m-d");
            var source = fopen(file, "a");
            fwrite(source, date("Y-m-d H:i:s") . " [" . ucfirst(level) . "]: " . message . PHP_EOL);
            fclose(source);
        }
    }

    public static function debug(string message)
    {
        self::write("debug", message);
    }
    
    public static function info(string message)
    {
        self::write("info", message);
    }

    public static function warn(string message)
    {
        self::write("warning", message);
    }

    public static function error(string message)
    {
        self::write("error", message);
    }

}
