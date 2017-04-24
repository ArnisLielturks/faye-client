# faye-client
## Installation
1. Install the package via composer:
 ```sh
composer require arnislielturks/faye-client
```

2. Register the provider in config/app.php
 ```php
// 'providers' => [
    ArnisLielturks\FayeServiceProvider::class,
// ];
```

3. Add configuration file (config/faye.php) with the following content. This should point to the Faye service
```php
return [
    'server' => 'http://127.0.0.1:8000'
];
```


4. Initialize and use the Faye client

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArnisLielturks\FayeServiceInterface;

class TestController extends Controller
{
    protected $faye;
    
    public function __construct(FayeServiceInterface $faye)
    {
        $this->faye = $faye;
    }

    public function sendFayeMessage()
    {
        $this->faye->send('/test', ['message'=>'test'], ['token' => '123']);
    }
}

```
That's it!
