sudo curl -XPUT http://localhost:9200/_river/gouv.accidents.corporels/_meta -d '
{
    "type" : "csv",
    "csv_file" : {
        "folder" : "/var/www/parisien/data/gouv",
        "filename_pattern" : ".*\\.csv$",
        "poll":"5m",
        "fields" : [
            "NUMAC",
            "Org",
            "Agg",
            "Int",
            "Atm",
            "Col",
            "Adr",
            "Dep",
            "Com",
            "Gps",
            "Lat",
            "Long",
            "Catr",
            "Voie",
            "V1",
            "V2",
            "PR",
            "PR1",
            "Infra",
            "Situ",
            "Circ",
            "Nbv",
            "Vosp",
            "Prof",
            "Plan",
            "Ttue",
            "Tbg",
            "Tbl",
            "Tindm",
            "Type numero",
            "Numero",
            "Distancemetre",
            "Libellevoie",
            "Coderivoli"
        ],
        "first_line_is_header" : "false",
        "field_separator" : ",",
        "escape_character" : ";",
        "quote_character" : "'",
        "field_id" : "id",
        "field_timestamp" : "imported_at",
        "concurrent_requests" : "1",
        "charset" : "UTF-8"
    },
    "index" : {
        "index" : "gouv.accidents.corporels",
        "type" : "csv_type",
        "bulk_size" : 100,
        "bulk_threshold" : 10
    }
}'