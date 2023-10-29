import sys

def dijkstra(graph, start):
    unvisited_nodes = set(graph)
    
    distances = {node: float('inf') for node in graph}
    distances[start] = 0

    shortest_paths = {}

    while unvisited_nodes:
        current_node = min(unvisited_nodes, key=lambda node: distances[node])

        unvisited_nodes.remove(current_node)

        for neighbor, weight in graph[current_node].items():
            distance = distances[current_node] + weight

            if distance < distances[neighbor]:
                distances[neighbor] = distance
                shortest_paths[neighbor] = current_node

    return distances, shortest_paths

graph = {
    'A': {'B': 1, 'C': 4},
    'B': {'A': 1, 'C': 2, 'D': 5},
    'C': {'A': 4, 'B': 2, 'D': 1},
    'D': {'B': 5, 'C': 1}
}

start_node = 'A'
distances, shortest_paths = dijkstra(graph, start_node)

print("Nejkratší vzdálenosti od uzlu", start_node)
for node, distance in distances.items():
    print(f"{node}: {distance}")

print("Nejkratší cesty:")
for node, path in shortest_paths.items():
    print(f"{node}: {path} -> {node}")
