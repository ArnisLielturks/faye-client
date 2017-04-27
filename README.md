# faye-client
## This is a wrapper for awesome https://github.com/nchaulet/faye-client library. Intended for use in Laravel 5+ applications
### Installation
1. Install the package via composer:
 ```sh
composer require arnislielturks/faye-client
```

2. Register the provider in config/app.php
 ```php
// 'providers' => [
    ArnisLielturks\FayeClient\FayeServiceProvider::class,
// ];
```

3. Add configuration file (config/faye.php) with the following content. This should point to the Faye service
```php
return [
    'server' => 'http://127.0.0.1:8000',
    'token' => 'your-token-here'
];
```


4. Initialize and use the Faye client

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArnisLielturks\FayeClient\FayeServiceInterface;

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
