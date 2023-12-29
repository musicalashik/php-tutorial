# stream related concept

In programming, a **stream** is a sequence of data elements made available over time.

(এটি লাইভ টিভিতেও ব্যবহার করা হয় কারণ লাইভ টিভিতে সিকুয়েন্সিয়ালী ডাটা ফ্ল করে আসা যাওয়া হয়।
সবটা একসাথে চলে আসে না।

যেমন মোবাইলে ডিশ টিভি অ্যাপ দিয়ে desh tv লাগানো হলো এটি দেখা যাবে যে পার্ট পার্ট করে ভিডিও ডাটা গুলা আসবে)

It is used to handle input and output in a way that is independent of the underlying device or data source/sink. Streams provide an abstraction for reading or writing data, whether it's from a file, network socket, or other sources.

A stream is often viewed as a flow of data that can be read from or written to sequentially. The concept of a stream is especially prevalent in I/O operations, where data is not necessarily available all at once but is delivered in chunks or as a continuous flow.

In PHP, `php://input` refers to a stream that allows you to read raw data from the request body. It's a special predefined stream wrapper in PHP that is used for input operations. When dealing with POST requests and non-form data (such as JSON), using `php://input` allows you to access the raw content of the request body directly, without relying on higher-level constructs like `$_POST` or `$_REQUEST`.

The term "read-only" in the context of `php://input` means that you can only read data from this stream; you cannot write data into it. It's a one-way mechanism for retrieving data from the incoming HTTP request body.

## list of all stream available on php

In PHP, there are various streams available for handling different types of input and output operations. Here are some commonly used streams:

1. **`php://stdin`:** Standard input stream. Allows reading from the console or other input sources.

2. **`php://stdout`:** Standard output stream. Used for writing output to the console or other output destinations.

3. **`php://stderr`:** Standard error stream. Used for writing error messages to the console or other error output destinations.

4. **`php://input`:** Allows reading raw data from the request body for POST requests.

5. **`php://output`:** Allows writing output directly to the browser or other output destinations.

6. **`php://memory`:** In-memory stream. Can be used to read from or write to an in-memory buffer.

7. **`php://temp`:** Temporary stream. Similar to `php://memory` but backed by a temporary file on disk if the data becomes too large.

8. **`file://`:** Used for reading from or writing to files. For example, `file://path/to/file.txt`.

9. **`http://` and `https://`:** Used for reading from or writing to HTTP and HTTPS URLs.

These streams are part of PHP's stream context, which provides a unified way to access various I/O resources. Additionally, PHP supports custom stream wrappers, allowing you to define your own protocols for accessing different types of data sources.

You can find more information about PHP streams in the official PHP documentation:

### what it is php://input

`php://input` is a read-only stream that allows you to read raw data from the request body. In the context of PHP, when you're dealing with POST requests that send data in the request body (such as JSON data), you can use `php://input` to access that raw data directly.

Here's how it works:

1. **Client (e.g., JavaScript in a web browser):** Sends an HTTP POST request with data in the request body.

2. **Server (e.g., PHP script):** Receives the request.

3. **`php://input`:** Instead of using higher-level functions like `$_POST` or `$_REQUEST`, you can use `php://input` to read the raw request body.

Here's an example in PHP:

```js

// Get the raw POST data from the request body
$inputData = file_get_contents('php://input');

// Decode the JSON data if needed
$jsonData = json_decode($inputData, true);

// Now $jsonData contains the parsed JSON data (if applicable)

```

In the context of the previous examples, `file_get_contents('php://input')` is used to read the raw JSON data from the request body. This is particularly useful when dealing with non-form data, like JSON, that doesn't populate the `$_POST` array.

Keep in mind that using `php://input` directly gives you more control over how you handle the raw input, but it also means you need to manually parse the data (e.g., using `json_decode` for JSON data).