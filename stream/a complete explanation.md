A Guide to Streams in PHP: In-Depth Tutorial With Examples
==========================================================

By: Kevin Cunningham
   |  July 31, 2019
![A Guide to Streams in PHP: In-Depth Tutorial With Examples](https://stackify.com/wp-content/uploads/2019/07/phpstream-881x441-1.jpg)

You've already used PHP streams in your [PHP development](https://stackify.com/learn-php-tutorials/). However, they're transparent, so you may not have noticed them. Streams are powerful tools.

In this article, you'll learn to harness the power of streams in your PHP development and take your applications to the next level.

### What are streams?

Streams provide on-demand access to data. This means you don't need to load the entire contents of your dataset into memory before processing can start. Without streams, opening a 20MB file will consume 20MB of memory.

Most installations of PHP are set to use little memory---generally around 64MB. So working with large sets of data presents problems. Using streams allows you to interact with very large files in predictable and efficient ways.

It's possible that in development your files are small enough not to cause a problem in this way, but in production, your system falls over. Using a remote monitoring service such as [Retrace](https://stackify.com/retrace-app-monitoring/) can help you stay on top of this.

Streams build on a uniform interface to access many types of data using a common set of functions and tools. It's not an object-oriented interface, but it's still polymorphism in action.

Through streams, you can carry out read and write operations seamlessly, regardless of the context of the data. So whether your context is the file system, TCP connection, or a compressed file, you can process your data with ease.

Every stream has an implementation of a wrapper. A wrapper provides the additional code necessary to handle the specific protocols or encodings. PHP has a number of wrappers built in. It's also easyto write wrappers of your own to interact with other services and protocols.

![](https://stackify.com/wp-content/uploads/2019/07/image-16.jpeg)

### Working with the file system

When using streams, working with the file system is exactly the same as working with any resource. I'm going to use the file system as an example, and then we can extend to some other contexts.

You reference a stream using a scheme and a target, like this:

```
<scheme>://<target>
```

The scheme is the protocol or wrapper that's being referenced, and the target is the specific resource identifier.

As you'll see, what the target actually contains will differ depending on the context. The default wrapper is the file system. That means you use streams every time you interact with the file system. You're probably already familiar with other schemes, such as HTTP and FTP.

Let's imagine you've found an enormous list of email addresses. In fact, you've found a billion email addresses that you want to loop over and do something to.

```
sharon@verizon.net
janusfury@att.net
timtroyr@live.com
danzigism@outlook.com
ryanshaw@yahoo.ca
ournews@icloud.com
improv@yahoo.ca
corrada@icloud.com
papathan@sbcglobal.net
mgemmons@mac.com
dinther@att.net
...
```

As you can see, each email address is on a new line, which will be helpful.

First, let's try to open a large file without using streams.

```
<?php
$photos = file\_get\_contents(\_\_DIR\_\_ . '/big\_file.txt');
```

If you run this, you'll get the following error:

```
\> PHP Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 1048576000 bytes)
```

Under the hood, this function uses a stream. Here, though, PHP reads the entire file at once into memory.

To succeed, use the on-demand capabilities of streams. Instead of trying (and failing) to load the entire file into memory, get a handle that you can use to access the data at various points.

```
<?php
$handle = fopen(\_\_DIR\_\_ . '/big\_file.txt', 'r');
```

This is the same first argument as with the file\_get\_contents function. The second argument is a flag to signify the mode you want to open the file in. This could be read-only ('r') or write ('w') or any of a [large number of alternatives](https://www.php.net/manual/en/function.fopen.php).

You might have noticed that even though we've moved to streams, we haven't added the scheme here. A different option is this:

```
<?php
$handle = fopen('file://' . \_\_DIR\_\_ . '/big\_file.txt', 'r');
```

As the file scheme is the default, you don't need to do this when working with local files.

You have a handle now! But how do you get to your data?

### Reading from files

Two commands allow you to read from a stream. Both are nearly identical in function. We'll use **fgets()**. You can also look at the alternative, **[stream\_get\_line(](https://www.php.net/manual/en/function.stream-get-line.php)**[)](https://www.php.net/manual/en/function.stream-get-line.php), if you wish. There are some minor differences that you may want to familiarize yourself with.

```
\>>> $email = fgets($handle)
=> "sharon@verizon.net\\n"
```

Awesome! You have your first line of text, including the **\\n** delimiter character.

If you run it again, you get this:

```
\>>> $email = fgets($handle)
=> "janusfury@att.net\\n"
```

That's the second email on the list---excellent!

But how does PHP keep track of where in the file it has gotten to? That information is in the **$handle**. This is a file pointer resource---a special variable that holds a reference to your external file.

To see where the interpreter has gotten to in a file, use the **ftell()** function.

```
\>>> ftell($handle)
=> 37
```

Now that you've reached the end of the second email address, you're 37 bytes into the file. If you want to, you can start over with the **rewind()** function.

```
\>>> rewind($handle)
=> true
>>> ftell($handle)
=> 0
```

Now you have all of the tools to write a program that will do something with each email address in **big\_file.txt**.

```
<?php
// Here is where you open my stream and get the handle.
$emails = fopen(\_\_DIR\_\_ . '/big\_file.txt', 'r');

// You can use an infinite loop to keep going until you say stop.
while(1)
{
  // This is where you get the next email.
  $email = fgets($emails);
  // If it is blank, the stream returns false, so you can break.
  if (!$email)
  {
    break;
  }
  // This is where you can do something with the address.
  echo $email;
}

// Here you close the stream. PHP will do this anyway, but it's good practice.
fclose($emails);
```

![](https://stackify.com/wp-content/uploads/2019/07/image-15-1024x683.jpeg)

### Writing to files

A colleague asks you for a copy of the file in another directory. How can you do that? You can use two streams: one to read the original file line by line, and another to write to a new file in the same way.

```
<?php
// Open the source and destination stream.
$source = fopen(\_\_DIR\_\_ . '/big\_file.txt', 'r');
$dest = fopen(\_\_DIR\_\_ . '/copy\_big\_file.txt', 'w');

// Wrap in an infinite loop, as before.
while(1)
{
  // Read the line from the file.
  $line = fgets($source);

  // Check that there's a data. If there isn't, break.
  if (!$line)
  {
    break;
  }

  // This is an alias of fwrite(), but it reads better.
  // The first argument is the destination stream, and the second is the data.
  fputs($dest, $line);
}

// Close the streams when you're done.
fclose($dest);
fclose($source);
```

Because you're using streams, the memory footprint for this operation is low and constant, even if you're working with huge files. There's a built-in PHP function that does this for you--- namely, **stream\_copy\_to\_stream()**. Using this function, your script would be much shorter.

```
<?php
$source = fopen(\_\_DIR\_\_ . '/big\_file.txt', 'r');
$dest = fopen(\_\_DIR\_\_ . '/copy\_big\_file.txt', 'w');

stream\_copy\_to\_stream($source, $dest);

fclose($dest);
fclose($source);
```

You probably aren't going to use PHP streams to move files around your computer. However, you can apply this knowledge to lots of other contexts. For example, you could use streams to move files from a client computer to a server, or even to several servers at once. Or you could process compressed files line by line, or read from a website and write to a disk. The possibilities are as endless as the types of data you can think of.

### Stream wrappers

A wrapper is the code that tells the stream how to handle specific protocols. You can see what wrappers are on your server by using the function **stream\_get\_wrappers()**. On my local environment, I get this:

```
\>>> stream\_get\_wrappers()
=> \[
     "https",
     "ftps",
     "compress.zlib",
     "php",
     "file",
     "glob",
     "data",
     "http",
     "ftp",
     "phar",
     "zip",
   \]
```

That's quite a list!

In the last section, you saw the default file wrapper in action. Most of the other wrappers here need no explanation. HTTP, HTTPS, FTP, ZIP, and others do what you'd expect. What about the PHP wrapper, though?

### The PHP wrapper

The PHP wrapper allows access to the languages' own input and output streams, along with access to temporary memory and disk-backed file streams.

To get access to the standard input stream, you can use **php://stdin**, which is read-only. In contrast, **php://stdout**gives direct access to the standard out stream and **php://stderr** to the error stream, both of which are write-only.

The streams **php://memory** and **php://temp** are read-write, allowing temporary data to be stored in a file-like wrapper. The difference between the two is that **php://memory** will always be in memory, whereas **php://temp** will start writing to a temporary file when the memory limit is reached. This limit is predefined in the PHP configuration, and the default is 2MB.

```
<?php
// Here's how to open the temporary stream.
$temp = fopen('php://temp', 'rw');

// I'm generating some data here, but this will normally be your application.
for ($i = 0; $i < 1000; $i++)
{
  $string = $i . " green bottles sitting on a wall. \\n";

  // Here's how to add the line to the end of the stream.
  fputs($temp, $string);
}

// Once you've finished collecting the data, you can rewind to the start to read it.
rewind($temp);

// This works in the same way as reading from the file system above.
while(1)
{
  $string = fgets($temp);

  if (!$string) {
    break;
  }

  echo $string;
}

fclose($temp);
```

There's also **php://filter**, which is a meta-wrapper. It lets you filter your steam as you open it. This is useful with all-in-one functions, such as **file\_get\_contents()** or **file\_put\_contents()**, where you can't apply other filters on a line-by-line basis.

```
<?php
file\_put\_contents("php://filter/write=string.rot13/resource=encrypted.txt", "My very secret string.");
```

This code filters the string "My very secret string" through the rot13 filter, a primitive encryption cypher, and then writes it to **encrypted.txt** in the current directory.

### Stream contexts

A context is a set of parameters and wrapper-specific options that can enhance or otherwise change the behavior of a stream. You create a context using the **stream\_context\_create()** function. Most of the stream creation functions will accept a context array.

The most common use of stream contexts in PHP is to build HTTP headers.

```
<?php
// You can create an array of array with your custom values.
$opts = \[
  // The top-level key is the wrapper you want to alter.
  'https'=> \[
    // These are keys you may want to change.
    'method'=>"GET",
    'header'=> "User-Agent: MyCoolBrowser"
  \]
\];

// You can change the default by using this function and passing the array of changes.
$default = stream\_context\_get\_default($opts);

// Now the headers will declare your User-Agent as MyCoolBrowser when you get this file.
readfile('https://www.theguardian.com');
```

People normally change headers for much more practical reasons, such as to add tracking or verification. However, you can easily extend this trivial example to each of those tasks.

### Using filters

A filter is a final piece of code that performs operations on data as it's being read from or written to a stream. You can stack multiple filters onto a stream. I've already used the filters that come with the **php:// wrapper**. They were necessary for all-in-one file reads. However, it's possible---and often desirable---to apply filters when working with more discrete chunks.

PHP comes with built-in filters. As with wrappers, you can use a function to find out which are active in your installation.

```
\>>> stream\_get\_filters()
=> \[
     "zlib.\*",
     "string.rot13",
     "string.toupper",
     "string.tolower",
     "string.strip\_tags",
     "convert.\*",
     "consumed",
     "dechunk",
     "convert.iconv.\*",
   \]
```

Some PHP extensions provide their own filters, so your list may differ greatly from mine. For example, the **mcrypt**extension installs the **mcrypt.\*** and **mdecrypt.\*** filters, which are significantly more secure than our rot13 application earlier.

If for some reason you wanted all your email addresses to be in uppercase (or more likely, ensure they were all in lowercase), you could use a filter like so:

```
<?php
$emails = fopen(\_\_DIR\_\_ . '/big\_file.txt', 'r');
stream\_filter\_append($emails, 'string.toupper');
```

Now when you use **fgets()** to read the email addresses, each character will be in uppercase.

### Writing your own filter

PHP provides a base class **PHP\_User\_Filter** that you can extend to make your own filter.

The main worker method that you must override **is filter()**. The parent stream calls this method and receives the following parameters:

-   **$in**: This is a pointer to a group of buckets containing the data to be filtered.
-   **$out**: This is a pointer to a group of buckets for storing the converted data.
-   **$consumed**: This is a counter passed by reference that needs to be incremented by the length of the converted data.
-   **$closing**: This is a Boolean flag that is set to TRUE if you're in the last cycle and the stream is about to close.

I've decided that I don't like people knowing my name, Kevin. So I've written a filter to replace "Kevin" with "REDACTED." Here's the full code for the filter:

```
<?php
class NameFilter extends PHP\_User\_Filter
{
  private $\_data;

  // This is called when the filter is initialized.
  function onCreate()
  {
    $this->\_data = '';
    return true;
  }

  // This is the main function that does the data conversion.
  public function filter($in, $out, &$consumed, $closing)
  {
    // Here, I'm reading all the stream data into the $\_data variable.
    while($bucket = stream\_bucket\_make\_writeable($in))
    {
      $this->\_data .= $bucket->data;
      $this->bucket = $bucket;
      $consumed = 0;
    }

    // Now I process it and save it again to the bucket.
    if ($closing)
    {
      $consumed += strlen($this->\_data);

      // Here's where I set the data to replace and do the replacement.
      $pattern = "/Kevin/m";
      $str = preg\_replace($pattern,
                          'REDACTED',
                          $this->\_data);

      $this->bucket->data = $str;
      $this->bucket->datalen = strlen($this->\_data);

      if(!empty($this->bucket->data))
      {
        stream\_bucket\_append($out, $this->bucket);
      }

      // This PHP constant indicates that the filter returned a value in $out.
      return PSFS\_PASS\_ON;
    }

    // This PHP constant indicates that the filter didn't return a value.
    return PSFS\_FEED\_ME;
  }
}
```

This is a silly example, but it might inspire you to think of your own. Maybe you want to add a title in front of each name or add a link for every company name that appears. If your company name appears, you might want to trigger an email alert. A filtered stream could help you do this. Also, you can carry out any string replacement or any operation on each chunk from the stream.

### Registering and using your filter

Once you've written your filter by extending the **PHP\_User\_Filter** base class, you'll want to register the filter and apply it to the stream.

```
$contents = '';

// Here's how to register a NameFilter with PHP for this life cycle.
stream\_filter\_register('myFilter', 'NameFilter');

// Open the stream as normal.
$handle = fopen("https://en.wikipedia.org/wiki/Kevin\_Bacon", "r");

// Append your filter to the stream.
stream\_filter\_append($handle, "myFilter");

while(1)
{
  $line = fgets($handle);

  if (!$line)
  {
    break;
  }

  $contents .= $line;
}

fclose($handle);
echo $contents;
```

Running the script above allows me to see Kevin Bacon's Wikipedia page. I have redacted "Kevin," and now Mr. Bacon is known only as REDACTED Bacon.