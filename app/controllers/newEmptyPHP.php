IncomingMessage {
  _readableState:
   ReadableState {
     objectMode: false,
     highWaterMark: 16384,
     buffer: BufferList { length: 0 },
     length: 0,
     pipes: null,
     pipesCount: 0,
     flowing: null,
     ended: true,
     endEmitted: false,
     reading: false,
     sync: true,
     needReadable: false,
     emittedReadable: true,
     readableListening: false,
     resumeScheduled: false,
     emitClose: true,
     destroyed: false,
     defaultEncoding: 'utf8',
     awaitDrain: 0,
     readingMore: true,
     decoder: null,
     encoding: null },
  readable: true,
  _events: {},
  _eventsCount: 0,
  _maxListeners: undefined,
  socket:
   Socket {
     connecting: false,
     _hadError: false,
     _handle:
      TCP {
        reading: true,
        owner: [Circular],
        onread: [Function: onread],
        onconnection: null,
        _consumed: true },
     _parent: null,
     _host: null,
     _readableState:
      ReadableState {
        objectMode: false,
        highWaterMark: 16384,
        buffer: BufferList { length: 0 },
        length: 0,
        pipes: null,
        pipesCount: 0,
        flowing: true,
        ended: false,
        endEmitted: false,
        reading: true,
        sync: false,
        needReadable: true,
        emittedReadable: false,
        readableListening: false,
        resumeScheduled: false,
        emitClose: false,
        destroyed: false,
        defaultEncoding: 'utf8',
        awaitDrain: 0,
        readingMore: false,
        decoder: null,
        encoding: null },
     readable: true,
     _events:
      { end: [Array],
        drain: [Array],
        timeout: [Function: socketOnTimeout],
        data: [Function: bound socketOnData],
        error: [Function: socketOnError],
        close: [Array],
        resume: [Function: onSocketResume],
        pause: [Function: onSocketPause] },
     _eventsCount: 8,
     _maxListeners: undefined,
     _writableState:
      WritableState {
        objectMode: false,
        highWaterMark: 16384,
        finalCalled: false,
        needDrain: false,
        ending: false,
        ended: false,
        finished: false,
        destroyed: false,
        decodeStrings: false,
        defaultEncoding: 'utf8',
        length: 0,
        writing: false,
        corked: 0,
        sync: false,
        bufferProcessing: false,
        onwrite: [Function: bound onwrite],
        writecb: null,
        writelen: 0,
        bufferedRequest: null,
        lastBufferedRequest: null,
        pendingcb: 3,
        prefinished: false,
        errorEmitted: false,
        emitClose: false,
        bufferedRequestCount: 0,
        corkedRequestsFree: [Object] },
     writable: true,
     allowHalfOpen: true,
     _sockname: null,
     _pendingData: null,
     _pendingEncoding: '',
     server:
      Server {
        _events: [Object],
        _eventsCount: 2,
        _maxListeners: undefined,
        _connections: 1,
        _handle: [TCP],
        _usingWorkers: false,
        _workers: [],
        _unref: false,
        allowHalfOpen: true,
        pauseOnConnect: false,
        httpAllowHalfOpen: false,
        timeout: 120000,
        keepAliveTimeout: 5000,
        _pendingResponseData: 0,
        maxHeadersCount: null,
        _connectionKey: '6::::5050',
        [Symbol(IncomingMessage)]: [Function],
        [Symbol(ServerResponse)]: [Function],
        [Symbol(asyncId)]: 12 },
     _server:
      Server {
        _events: [Object],
        _eventsCount: 2,
        _maxListeners: undefined,
        _connections: 1,
        _handle: [TCP],
        _usingWorkers: false,
        _workers: [],
        _unref: false,
        allowHalfOpen: true,
        pauseOnConnect: false,
        httpAllowHalfOpen: false,
        timeout: 120000,
        keepAliveTimeout: 5000,
        _pendingResponseData: 0,
        maxHeadersCount: null,
        _connectionKey: '6::::5050',
        [Symbol(IncomingMessage)]: [Function],
        [Symbol(ServerResponse)]: [Function],
        [Symbol(asyncId)]: 12 },
     parser:
      HTTPParser {
        '0': [Function: parserOnHeaders],
        '1': [Function: parserOnHeadersComplete],
        '2': [Function: parserOnBody],
        '3': [Function: parserOnMessageComplete],
        '4': [Function: bound onParserExecute],
        _headers: [],
        _url: '',
        _consumed: true,
        socket: [Circular],
        incoming: [Circular],
        outgoing: null,
        maxHeaderPairs: 2000,
        onIncoming: [Function: bound parserOnIncoming] },
     on: [Function: socketOnWrap],
     _paused: false,
     _httpMessage:
      ServerResponse {
        _events: [Object],
        _eventsCount: 1,
        _maxListeners: undefined,
        output: [],
        outputEncodings: [],
        outputCallbacks: [],
        outputSize: 0,
        writable: true,
        _last: false,
        chunkedEncoding: false,
        shouldKeepAlive: true,
        useChunkedEncodingByDefault: true,
        sendDate: true,
        _removedConnection: false,
        _removedContLen: false,
        _removedTE: false,
        _contentLength: 233,
        _hasBody: true,
        _trailer: '',
        finished: true,
        _headerSent: true,
        socket: [Circular],
        connection: [Circular],
        _header:
         'HTTP/1.1 200 OK\r\nX-Powered-By: Express\r\nContent-Type: application/json; charset=utf-8\r\nContent-Length: 233\r\nETag: W/"e9-x/o88gt8OeNfhIHL2icaX3hzx8o"\r\nDa
te: Thu, 19 Jul 2018 11:45:41 GMT\r\nConnection: keep-alive\r\n\r\n',
        _onPendingData: [Function: bound updateOutgoingData],
        _sent100: false,
        _expect_continue: false,
        req: [Circular],
        locals: {},
        statusMessage: 'OK',
        statusCode: 200,
        [Symbol(isCorked)]: false,
        [Symbol(outHeadersKey)]: [Object] },
     [Symbol(asyncId)]: 45,
     [Symbol(lastWriteQueueSize)]: 0,
     [Symbol(timeout)]:
      Timeout {
        _called: false,
        _idleTimeout: 120000,
        _idlePrev: [TimersList],
        _idleNext: [TimersList],
        _idleStart: 3513,
        _onTimeout: [Function: bound ],
        _timerArgs: undefined,
        _repeat: null,
        _destroyed: false,
        [Symbol(unrefed)]: true,
        [Symbol(asyncId)]: 46,
        [Symbol(triggerId)]: 45 },
     [Symbol(kBytesRead)]: 0,
     [Symbol(kBytesWritten)]: 0 },
  connection:
   Socket {
     connecting: false,
     _hadError: false,
     _handle:
      TCP {
        reading: true,
        owner: [Circular],
        onread: [Function: onread],
        onconnection: null,
        _consumed: true },
     _parent: null,
     _host: null,
     _readableState:
      ReadableState {
        objectMode: false,
        highWaterMark: 16384,
        buffer: BufferList { length: 0 },
        length: 0,
        pipes: null,
        pipesCount: 0,
        flowing: true,
        ended: false,
        endEmitted: false,
        reading: true,
        sync: false,
        needReadable: true,
        emittedReadable: false,
        readableListening: false,
        resumeScheduled: false,
        emitClose: false,
        destroyed: false,
        defaultEncoding: 'utf8',
        awaitDrain: 0,
        readingMore: false,
        decoder: null,
        encoding: null },
     readable: true,
     _events:
      { end: [Array],
        drain: [Array],
        timeout: [Function: socketOnTimeout],
        data: [Function: bound socketOnData],
        error: [Function: socketOnError],
        close: [Array],
        resume: [Function: onSocketResume],
        pause: [Function: onSocketPause] },
     _eventsCount: 8,
     _maxListeners: undefined,
     _writableState:
      WritableState {
        objectMode: false,
        highWaterMark: 16384,
        finalCalled: false,
        needDrain: false,
        ending: false,
        ended: false,
        finished: false,
        destroyed: false,
        decodeStrings: false,
        defaultEncoding: 'utf8',
        length: 0,
        writing: false,
        corked: 0,
        sync: false,
        bufferProcessing: false,
        onwrite: [Function: bound onwrite],
        writecb: null,
        writelen: 0,
        bufferedRequest: null,
        lastBufferedRequest: null,
        pendingcb: 3,
        prefinished: false,
        errorEmitted: false,
        emitClose: false,
        bufferedRequestCount: 0,
        corkedRequestsFree: [Object] },
     writable: true,
     allowHalfOpen: true,
     _sockname: null,
     _pendingData: null,
     _pendingEncoding: '',
     server:
      Server {
        _events: [Object],
        _eventsCount: 2,
        _maxListeners: undefined,
        _connections: 1,
        _handle: [TCP],
        _usingWorkers: false,
        _workers: [],
        _unref: false,
        allowHalfOpen: true,
        pauseOnConnect: false,
        httpAllowHalfOpen: false,
        timeout: 120000,
        keepAliveTimeout: 5000,
        _pendingResponseData: 0,
        maxHeadersCount: null,
        _connectionKey: '6::::5050',
        [Symbol(IncomingMessage)]: [Function],
        [Symbol(ServerResponse)]: [Function],
        [Symbol(asyncId)]: 12 },
     _server:
      Server {
        _events: [Object],
        _eventsCount: 2,
        _maxListeners: undefined,
        _connections: 1,
        _handle: [TCP],
        _usingWorkers: false,
        _workers: [],
        _unref: false,
        allowHalfOpen: true,
        pauseOnConnect: false,
        httpAllowHalfOpen: false,
        timeout: 120000,
        keepAliveTimeout: 5000,
        _pendingResponseData: 0,
        maxHeadersCount: null,
        _connectionKey: '6::::5050',
        [Symbol(IncomingMessage)]: [Function],
        [Symbol(ServerResponse)]: [Function],
        [Symbol(asyncId)]: 12 },
     parser:
      HTTPParser {
        '0': [Function: parserOnHeaders],
        '1': [Function: parserOnHeadersComplete],
        '2': [Function: parserOnBody],
        '3': [Function: parserOnMessageComplete],
        '4': [Function: bound onParserExecute],
        _headers: [],
        _url: '',
        _consumed: true,
        socket: [Circular],
        incoming: [Circular],
        outgoing: null,
        maxHeaderPairs: 2000,
        onIncoming: [Function: bound parserOnIncoming] },
     on: [Function: socketOnWrap],
     _paused: false,
     _httpMessage:
      ServerResponse {
        _events: [Object],
        _eventsCount: 1,
        _maxListeners: undefined,
        output: [],
        outputEncodings: [],
        outputCallbacks: [],
        outputSize: 0,
        writable: true,
        _last: false,
        chunkedEncoding: false,
        shouldKeepAlive: true,
        useChunkedEncodingByDefault: true,
        sendDate: true,
        _removedConnection: false,
        _removedContLen: false,
        _removedTE: false,
        _contentLength: 233,
        _hasBody: true,
        _trailer: '',
        finished: true,
        _headerSent: true,
        socket: [Circular],
        connection: [Circular],
        _header:
         'HTTP/1.1 200 OK\r\nX-Powered-By: Express\r\nContent-Type: application/json; charset=utf-8\r\nContent-Length: 233\r\nETag: W/"e9-x/o88gt8OeNfhIHL2icaX3hzx8o"\r\nDa
te: Thu, 19 Jul 2018 11:45:41 GMT\r\nConnection: keep-alive\r\n\r\n',
        _onPendingData: [Function: bound updateOutgoingData],
        _sent100: false,
        _expect_continue: false,
        req: [Circular],
        locals: {},
        statusMessage: 'OK',
        statusCode: 200,
        [Symbol(isCorked)]: false,
        [Symbol(outHeadersKey)]: [Object] },
     [Symbol(asyncId)]: 45,
     [Symbol(lastWriteQueueSize)]: 0,
     [Symbol(timeout)]:
      Timeout {
        _called: false,
        _idleTimeout: 120000,
        _idlePrev: [TimersList],
        _idleNext: [TimersList],
        _idleStart: 3513,
        _onTimeout: [Function: bound ],
        _timerArgs: undefined,
        _repeat: null,
        _destroyed: false,
        [Symbol(unrefed)]: true,
        [Symbol(asyncId)]: 46,
        [Symbol(triggerId)]: 45 },
     [Symbol(kBytesRead)]: 0,
     [Symbol(kBytesWritten)]: 0 },
  httpVersionMajor: 1,
  httpVersionMinor: 1,
  httpVersion: '1.1',
  complete: true,
  headers:
   { 'content-type': 'application/json',
     'cache-control': 'no-cache',
     'postman-token': 'b3553b76-2cf1-4ec1-8adb-56e59eb4b273',
     'user-agent': 'PostmanRuntime/7.1.5',
     accept: '*/*',
     host: 'localhost:5050',
     cookie:
      'vds_language=b2de0cbee4f612edd85a25e76907b68ff60ef876eabee3b5fb0434d6ffaae76eba70d756944e6975ef49453e41da9449e0c7c2ebe4cd921d7afb9ab0cace4ba1jdPi6G2elzY8ecgBnszYm92O
yA%2F%2BUD1GbVV6LrOOshHMzLbgwPUjY1XvLivpGFOXl97sCScu1nm7UbbNq6nQxvlfOXvPj3hJF5ywMlWsnAesuROEeCxuxU%2BnIcP8dm2X6UrvLGoEpq9YmPz4%2FbROd8LRPli9L66pIA%2BmDd8yhrHxDlUQBRsO8JIbhL
EXPc7X',
     'accept-encoding': 'gzip, deflate',
     connection: 'keep-alive' },
  rawHeaders:
   [ 'Content-Type',
     'application/json',
     'cache-control',
     'no-cache',
     'Postman-Token',
     'b3553b76-2cf1-4ec1-8adb-56e59eb4b273',
     'User-Agent',
     'PostmanRuntime/7.1.5',
     'Accept',
     '*/*',
     'Host',
     'localhost:5050',
     'cookie',
     'vds_language=b2de0cbee4f612edd85a25e76907b68ff60ef876eabee3b5fb0434d6ffaae76eba70d756944e6975ef49453e41da9449e0c7c2ebe4cd921d7afb9ab0cace4ba1jdPi6G2elzY8ecgBnszYm92Oy
A%2F%2BUD1GbVV6LrOOshHMzLbgwPUjY1XvLivpGFOXl97sCScu1nm7UbbNq6nQxvlfOXvPj3hJF5ywMlWsnAesuROEeCxuxU%2BnIcP8dm2X6UrvLGoEpq9YmPz4%2FbROd8LRPli9L66pIA%2BmDd8yhrHxDlUQBRsO8JIbhLE
XPc7X',
     'accept-encoding',
     'gzip, deflate',
     'Connection',
     'keep-alive' ],
  trailers: {},
  rawTrailers: [],
  aborted: false,
  upgrade: false,
  url: '/tasks/3',
  method: 'GET',
  statusCode: null,
  statusMessage: null,
  client:
   Socket {
     connecting: false,
     _hadError: false,
     _handle:
      TCP {
        reading: true,
        owner: [Circular],
        onread: [Function: onread],
        onconnection: null,
        _consumed: true },
     _parent: null,
     _host: null,
     _readableState:
      ReadableState {
        objectMode: false,
        highWaterMark: 16384,
        buffer: BufferList { length: 0 },
        length: 0,
        pipes: null,
        pipesCount: 0,
        flowing: true,
        ended: false,
        endEmitted: false,
        reading: true,
        sync: false,
        needReadable: true,
        emittedReadable: false,
        readableListening: false,
        resumeScheduled: false,
        emitClose: false,
        destroyed: false,
        defaultEncoding: 'utf8',
        awaitDrain: 0,
        readingMore: false,
        decoder: null,
        encoding: null },
     readable: true,
     _events:
      { end: [Array],
        drain: [Array],
        timeout: [Function: socketOnTimeout],
        data: [Function: bound socketOnData],
        error: [Function: socketOnError],
        close: [Array],
        resume: [Function: onSocketResume],
        pause: [Function: onSocketPause] },
     _eventsCount: 8,
     _maxListeners: undefined,
     _writableState:
      WritableState {
        objectMode: false,
        highWaterMark: 16384,
        finalCalled: false,
        needDrain: false,
        ending: false,
        ended: false,
        finished: false,
        destroyed: false,
        decodeStrings: false,
        defaultEncoding: 'utf8',
        length: 0,
        writing: false,
        corked: 0,
        sync: false,
        bufferProcessing: false,
        onwrite: [Function: bound onwrite],
        writecb: null,
        writelen: 0,
        bufferedRequest: null,
        lastBufferedRequest: null,
        pendingcb: 3,
        prefinished: false,
        errorEmitted: false,
        emitClose: false,
        bufferedRequestCount: 0,
        corkedRequestsFree: [Object] },
     writable: true,
     allowHalfOpen: true,
     _sockname: null,
     _pendingData: null,
     _pendingEncoding: '',
     server:
      Server {
        _events: [Object],
        _eventsCount: 2,
        _maxListeners: undefined,
        _connections: 1,
        _handle: [TCP],
        _usingWorkers: false,
        _workers: [],
        _unref: false,
        allowHalfOpen: true,
        pauseOnConnect: false,
        httpAllowHalfOpen: false,
        timeout: 120000,
        keepAliveTimeout: 5000,
        _pendingResponseData: 0,
        maxHeadersCount: null,
        _connectionKey: '6::::5050',
        [Symbol(IncomingMessage)]: [Function],
        [Symbol(ServerResponse)]: [Function],
        [Symbol(asyncId)]: 12 },
     _server:
      Server {
        _events: [Object],
        _eventsCount: 2,
        _maxListeners: undefined,
        _connections: 1,
        _handle: [TCP],
        _usingWorkers: false,
        _workers: [],
        _unref: false,
        allowHalfOpen: true,
        pauseOnConnect: false,
        httpAllowHalfOpen: false,
        timeout: 120000,
        keepAliveTimeout: 5000,
        _pendingResponseData: 0,
        maxHeadersCount: null,
        _connectionKey: '6::::5050',
        [Symbol(IncomingMessage)]: [Function],
        [Symbol(ServerResponse)]: [Function],
        [Symbol(asyncId)]: 12 },
     parser:
      HTTPParser {
        '0': [Function: parserOnHeaders],
        '1': [Function: parserOnHeadersComplete],
        '2': [Function: parserOnBody],
        '3': [Function: parserOnMessageComplete],
        '4': [Function: bound onParserExecute],
        _headers: [],
        _url: '',
        _consumed: true,
        socket: [Circular],
        incoming: [Circular],
        outgoing: null,
        maxHeaderPairs: 2000,
        onIncoming: [Function: bound parserOnIncoming] },
     on: [Function: socketOnWrap],
     _paused: false,
     _httpMessage:
      ServerResponse {
        _events: [Object],
        _eventsCount: 1,
        _maxListeners: undefined,
        output: [],
        outputEncodings: [],
        outputCallbacks: [],
        outputSize: 0,
        writable: true,
        _last: false,
        chunkedEncoding: false,
        shouldKeepAlive: true,
        useChunkedEncodingByDefault: true,
        sendDate: true,
        _removedConnection: false,
        _removedContLen: false,
        _removedTE: false,
        _contentLength: 233,
        _hasBody: true,
        _trailer: '',
        finished: true,
        _headerSent: true,
        socket: [Circular],
        connection: [Circular],
        _header:
         'HTTP/1.1 200 OK\r\nX-Powered-By: Express\r\nContent-Type: application/json; charset=utf-8\r\nContent-Length: 233\r\nETag: W/"e9-x/o88gt8OeNfhIHL2icaX3hzx8o"\r\nDa
te: Thu, 19 Jul 2018 11:45:41 GMT\r\nConnection: keep-alive\r\n\r\n',
        _onPendingData: [Function: bound updateOutgoingData],
        _sent100: false,
        _expect_continue: false,
        req: [Circular],
        locals: {},
        statusMessage: 'OK',
        statusCode: 200,
        [Symbol(isCorked)]: false,
        [Symbol(outHeadersKey)]: [Object] },
     [Symbol(asyncId)]: 45,
     [Symbol(lastWriteQueueSize)]: 0,
     [Symbol(timeout)]:
      Timeout {
        _called: false,
        _idleTimeout: 120000,
        _idlePrev: [TimersList],
        _idleNext: [TimersList],
        _idleStart: 3513,
        _onTimeout: [Function: bound ],
        _timerArgs: undefined,
        _repeat: null,
        _destroyed: false,
        [Symbol(unrefed)]: true,
        [Symbol(asyncId)]: 46,
        [Symbol(triggerId)]: 45 },
     [Symbol(kBytesRead)]: 0,
     [Symbol(kBytesWritten)]: 0 },
  _consuming: false,
  _dumped: false,
  next: [Function: next],
  baseUrl: '',
  originalUrl: '/tasks/3',
  _parsedUrl:
   Url {
     protocol: null,
     slashes: null,
     auth: null,
     host: null,
     port: null,
     hostname: null,
     hash: null,
     search: null,
     query: null,
     pathname: '/tasks/3',
     path: '/tasks/3',
     href: '/tasks/3',
     _raw: '/tasks/3' },
  params: { taskId: '3' },
  query: {},
  res:
   ServerResponse {
     _events: { finish: [Function: bound resOnFinish] },
     _eventsCount: 1,
     _maxListeners: undefined,
     output: [],
     outputEncodings: [],
     outputCallbacks: [],
     outputSize: 0,
     writable: true,
     _last: false,
     chunkedEncoding: false,
     shouldKeepAlive: true,
     useChunkedEncodingByDefault: true,
     sendDate: true,
     _removedConnection: false,
     _removedContLen: false,
     _removedTE: false,
     _contentLength: 233,
     _hasBody: true,
     _trailer: '',
     finished: true,
     _headerSent: true,
     socket:
      Socket {
        connecting: false,
        _hadError: false,
        _handle: [TCP],
        _parent: null,
        _host: null,
        _readableState: [ReadableState],
        readable: true,
        _events: [Object],
        _eventsCount: 8,
        _maxListeners: undefined,
        _writableState: [WritableState],
        writable: true,
        allowHalfOpen: true,
        _sockname: null,
        _pendingData: null,
        _pendingEncoding: '',
        server: [Server],
        _server: [Server],
        parser: [HTTPParser],
        on: [Function: socketOnWrap],
        _paused: false,
        _httpMessage: [Circular],
        [Symbol(asyncId)]: 45,
        [Symbol(lastWriteQueueSize)]: 0,
        [Symbol(timeout)]: [Timeout],
        [Symbol(kBytesRead)]: 0,
        [Symbol(kBytesWritten)]: 0 },
     connection:
      Socket {
        connecting: false,
        _hadError: false,
        _handle: [TCP],
        _parent: null,
        _host: null,
        _readableState: [ReadableState],
        readable: true,
        _events: [Object],
        _eventsCount: 8,
        _maxListeners: undefined,
        _writableState: [WritableState],
        writable: true,
        allowHalfOpen: true,
        _sockname: null,
        _pendingData: null,
        _pendingEncoding: '',
        server: [Server],
        _server: [Server],
        parser: [HTTPParser],
        on: [Function: socketOnWrap],
        _paused: false,
        _httpMessage: [Circular],
        [Symbol(asyncId)]: 45,
        [Symbol(lastWriteQueueSize)]: 0,
        [Symbol(timeout)]: [Timeout],
        [Symbol(kBytesRead)]: 0,
        [Symbol(kBytesWritten)]: 0 },
     _header:
      'HTTP/1.1 200 OK\r\nX-Powered-By: Express\r\nContent-Type: application/json; charset=utf-8\r\nContent-Length: 233\r\nETag: W/"e9-x/o88gt8OeNfhIHL2icaX3hzx8o"\r\nDate:
 Thu, 19 Jul 2018 11:45:41 GMT\r\nConnection: keep-alive\r\n\r\n',
     _onPendingData: [Function: bound updateOutgoingData],
     _sent100: false,
     _expect_continue: false,
     req: [Circular],
     locals: {},
     statusMessage: 'OK',
     statusCode: 200,
     [Symbol(isCorked)]: false,
     [Symbol(outHeadersKey)]:
      { 'x-powered-by': [Array],
        'content-type': [Array],
        'content-length': [Array],
        etag: [Array] } },
  route:
   Route {
     path: '/tasks/:taskId',
     stack: [ [Layer] ],
     methods: { get: true } } }
