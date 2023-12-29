import os
import struct
import zlib

def calculate_crc32(data):
    return zlib.crc32(data) & 0xFFFFFFFF

def create_zip(source, destination):
    if not os.path.exists(source):
        return False

    with open(destination, 'wb') as zip_file:
        # Write ZIP file header
        zip_file.write(b'PK\x03\x04')  # ZIP file signature
        zip_file.write(struct.pack('<HHHH', 0, 0, 0, 0))  # Various placeholders
        zip_file.write(struct.pack('<HH', 0, 0))  # General purpose bit flag and compression method
        zip_file.write(struct.pack('<LL', 0, 0))  # Last mod file time and date
        zip_file.write(struct.pack('<LL', 0, 0))  # CRC-32 and compressed size (placeholders)
        zip_file.write(struct.pack('<LL', 0, 0))  # Uncompressed size (placeholders)
        zip_file.write(struct.pack('<H', 0))  # File name length

        # Write file data
        for foldername, _, filenames in os.walk(source):
            for filename in filenames:
                file_path = os.path.join(foldername, filename)
                relative_path = os.path.relpath(file_path, source)

                # Write local file header
                local_header = struct.pack('<HLLHHHHLLLH', 0x0403, 0, 0, 0, 0, 0, 0, calculate_crc32(b''), 0, 0, len(relative_path), 0)
                zip_file.write(local_header)
                zip_file.write(relative_path.encode('utf-8'))

                # Write file content
                with open(file_path, 'rb') as file_content:
                    file_content_data = file_content.read()
                    zip_file.write(file_content_data)

                    # Update local file header with CRC-32, compressed size, and uncompressed size
                    current_position = zip_file.tell()
                    zip_file.seek(current_position - 16)
                    compressed_size = len(file_content_data)
                    uncompressed_size = os.path.getsize(file_path)
                    zip_file.write(struct.pack('<LLL', calculate_crc32(file_content_data), compressed_size, uncompressed_size))
                    zip_file.seek(current_position)

    return True

# Example usage
source_directory = "I:\\www-mojarkobi\\php-tutorial\\File structure\\images"
destination_zip = "I:\\www-mojarkobi\\php-tutorial\\File structure\\archive.zip"

if create_zip(source_directory, destination_zip):
    print('ZIP archive created successfully.')
else:
    print('Failed to create ZIP archive.')
