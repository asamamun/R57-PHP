<?php
$conn = new mysqli('localhost', 'root', '', 'sakila') or die("Could not connect to database;");
$conn->set_charset("utf8");
/*
class mysqli {
// Properties 
public readonly int|string $affected_rows;
public readonly string $client_info;
public readonly int $client_version;
public readonly int $connect_errno;
public readonly ?string $connect_error;
public readonly int $errno;
public readonly string $error;
public readonly array $error_list;
public readonly int $field_count;
public readonly string $host_info;
public readonly ?string $info;
public readonly int|string $insert_id;
public readonly string $server_info;
public readonly int $server_version;
public readonly string $sqlstate;
public readonly int $protocol_version;
public readonly int $thread_id;
public readonly int $warning_count;
// Methods 
public __construct(
    ?string $hostname = null,
    ?string $username = null,
    ?string $password = null,
    ?string $database = null,
    ?int $port = null,
    ?string $socket = null
)
public autocommit(bool $enable): bool
public begin_transaction(int $flags = 0, ?string $name = null): bool
public change_user(string $username, string $password, ?string $database): bool
public character_set_name(): string
public close(): true
public commit(int $flags = 0, ?string $name = null): bool
public connect(
    ?string $hostname = null,
    ?string $username = null,
    ?string $password = null,
    ?string $database = null,
    ?int $port = null,
    ?string $socket = null
): bool
public debug(string $options): true
public dump_debug_info(): bool
public execute_query(string $query, ?array $params = null): mysqli_result|bool
public get_charset(): ?object
public get_client_info(): string
public get_connection_stats(): array
public get_server_info(): string
public get_warnings(): mysqli_warning|false
public init(): ?bool
public kill(int $process_id): bool
public more_results(): bool
public multi_query(string $query): bool
public next_result(): bool
public options(int $option, string|int $value): bool
public ping(): bool
public static poll(
    ?array &$read,
    ?array &$error,
    array &$reject,
    int $seconds,
    int $microseconds = 0
): int|false
public prepare(string $query): mysqli_stmt|false
public query(string $query, int $result_mode = MYSQLI_STORE_RESULT): mysqli_result|bool
public real_connect(
    ?string $hostname = null,
    ?string $username = null,
    ?string $password = null,
    ?string $database = null,
    ?int $port = null,
    ?string $socket = null,
    int $flags = 0
): bool
public real_escape_string(string $string): string
public real_query(string $query): bool
public reap_async_query(): mysqli_result|bool
public refresh(int $flags): bool
public release_savepoint(string $name): bool
public rollback(int $flags = 0, ?string $name = null): bool
public savepoint(string $name): bool
public select_db(string $database): bool
public set_charset(string $charset): bool
public ssl_set(
    ?string $key,
    ?string $certificate,
    ?string $ca_certificate,
    ?string $ca_path,
    ?string $cipher_algos
): true
public stat(): string|false
public stmt_init(): mysqli_stmt|false
public store_result(int $mode = 0): mysqli_result|false
public thread_safe(): bool
public use_result(): mysqli_result|false
}
*/
